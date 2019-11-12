import { CartesianChart } from "../../cartesianChart";
import { Selection } from "../../../scene/selection";
import { Group } from "../../../scene/group";
import { Series, SeriesNodeDatum, CartesianTooltipRendererParams } from "../series";
import { numericExtent } from "../../../util/array";
import { toFixed } from "../../../util/number";
import { LegendDatum } from "../../legend";
import { Shape } from "../../../scene/shape/shape";
import linearScale from "../../../scale/linearScale";
import { Marker } from "../../marker/marker";
import { SeriesMarker } from "../seriesMarker";
import { Circle } from "../../marker/circle";
import { reactive } from "../../../util/observable";
import { Axis } from "../../../axis";
import Scale from "../../../scale/scale";
import { CartesianSeries } from "./cartesianSeries";

interface GroupSelectionDatum extends SeriesNodeDatum {
    x: number;
    y: number;
    size: number;
    fill?: string;
    stroke?: string;
    strokeWidth: number;
}

export interface ScatterTooltipRendererParams extends CartesianTooltipRendererParams {
    sizeKey?: string;
    sizeName?: string;

    labelKey?: string;
    labelName?: string;
}

export class ScatterSeries extends CartesianSeries {

    static className = 'ScatterSeries';

    xDomain: number[] = [];
    yDomain: number[] = [];
    private xData: any[] = [];
    private yData: any[] = [];
    private sizeData: number[] = [];
    private sizeScale = linearScale();

    private groupSelection: Selection<Group, Group, GroupSelectionDatum, any> = Selection.select(this.group).selectAll<Group>();

    private highlightedNode?: Marker;

    readonly marker = new SeriesMarker();

    highlightStyle: {
        fill?: string,
        stroke?: string
    } = {
        fill: 'yellow'
    };

    @reactive(['layoutChange']) title?: string;
    @reactive(['dataChange']) xKey: string = '';
    @reactive(['dataChange']) yKey: string = '';
    @reactive(['dataChange']) sizeKey?: string;
    @reactive(['dataChange']) labelKey?: string;

    xName: string = 'X';
    yName: string = 'Y';
    sizeName?: string = 'Size';
    labelName?: string = 'Label';

    tooltipRenderer?: (params: ScatterTooltipRendererParams) => string;

    constructor() {
        super();

        const { marker } = this;
        marker.addPropertyListener('type', this.onMarkerTypeChange.bind(this));
        marker.addEventListener('change', this.update.bind(this));
        marker.addEventListener('legendChange', event => this.fireEvent(event));

        this.addPropertyListener('xKey', () => this.xData = []);
        this.addPropertyListener('yKey', () => this.yData = []);
        this.addPropertyListener('sizeKey', () => this.sizeData = []);

        this.addEventListener('layoutChange', () => this.scheduleLayout.bind(this));
        this.addEventListener('dataChange', () => this.scheduleData.bind(this));
    }

    onMarkerTypeChange() {
        this.groupSelection = this.groupSelection.setData([]);
        this.groupSelection.exit.remove();
        this.update();
    }

    processData(): boolean {
        const {
            xKey,
            yKey,
            sizeKey
        } = this;

        const data = xKey && yKey ? this.data : [];

        this.xData = data.map(d => d[xKey]);
        this.yData = data.map(d => d[yKey]);

        if (sizeKey) {
            this.sizeData = data.map(d => d[sizeKey]);
        } else {
            this.sizeData = [];
        }

        this.sizeScale.domain = numericExtent(this.sizeData) || [1, 1];
        this.xDomain = this.calculateDomain(this.xData);
        this.yDomain = this.calculateDomain(this.yData);

        return true;
    }

    private calculateDomain(data: any[]): [number, number] {
        const domain = numericExtent(data) || [0, 1];
        const [min, max] = domain;

        if (min === max) {
            domain[0] = min - 1;
            domain[1] = max + 1;
        }

        return domain;
    }

    highlightNode(node: Shape) {
        if (!(node instanceof Marker)) {
            return;
        }

        this.highlightedNode = node;
        this.scheduleLayout();
    }

    dehighlightNode() {
        this.highlightedNode = undefined;
        this.scheduleLayout();
    }

    update(): void {
        const visible = this.group.visible = this.visible;

        // if (!chart || !visible || chart.dataPending || chart.layoutPending || !(chart.xAxis && chart.yAxis)) {
        //     return;
        // }

        const { xAxis, yAxis } = this;
        const xScale = xAxis.scale;
        const yScale = yAxis.scale;
        const xOffset = (xScale.bandwidth || 0) / 2;
        const yOffset = (yScale.bandwidth || 0) / 2;

        const {
            data,
            xData,
            yData,
            sizeData,
            sizeScale,
            marker,
            highlightedNode
        } = this;

        const Marker = marker.type || Circle; // TODO: what should really happen when the `type` is undefined?

        this.sizeScale.range = [marker.minSize, marker.size];

        const groupSelectionData: GroupSelectionDatum[] = xData.map((xDatum, i) => ({
            seriesDatum: data[i],
            x: xScale.convert(xDatum) + xOffset,
            y: yScale.convert(yData[i]) + yOffset,
            fill: marker.fill,
            stroke: marker.stroke,
            strokeWidth: marker.strokeWidth || 0,
            size: sizeData.length ? sizeScale.convert(sizeData[i]) : marker.size
        }));

        const updateGroups = this.groupSelection.setData(groupSelectionData);
        updateGroups.exit.remove();

        const enterGroups = updateGroups.enter.append(Group);
        enterGroups.append(Marker);

        const groupSelection = updateGroups.merge(enterGroups);
        const { fill: highlightFill, stroke: highlightStroke } = this.highlightStyle;

        groupSelection.selectByClass(Marker)
            .each((node, datum) => {
                node.translationX = datum.x;
                node.translationY = datum.y;
                node.size = datum.size;
                node.fill = node === highlightedNode && highlightFill !== undefined ? highlightFill : datum.fill;
                node.stroke = node === highlightedNode && highlightStroke !== undefined ? highlightStroke : datum.stroke;
                node.fillOpacity = marker.fillOpacity;
                node.strokeOpacity = marker.strokeOpacity;
                node.strokeWidth = datum.strokeWidth;
                node.visible = marker.enabled && datum.size > 0;
            });

        this.groupSelection = groupSelection;
    }

    getTooltipHtml(nodeDatum: GroupSelectionDatum): string {
        const { xKey, yKey } = this;

        if (!xKey || !yKey) {
            return '';
        }

        const {
            title,
            tooltipRenderer,
            xName,
            yName,
            sizeKey,
            sizeName,
            labelKey,
            labelName
        } = this;

        const color = this.marker.fill || 'gray';

        if (tooltipRenderer) {
            return tooltipRenderer({
                datum: nodeDatum.seriesDatum,
                xKey,
                yKey,
                sizeKey,
                labelKey,
                xName,
                yName,
                sizeName,
                labelName,
                title,
                color
            });
        } else {
            const titleStyle = `style="color: white; background-color: ${color}"`;
            const titleHtml = title ? `<div class="title" ${titleStyle}>${title}</div>` : '';
            const seriesDatum = nodeDatum.seriesDatum;
            const xValue = seriesDatum[xKey];
            const yValue = seriesDatum[yKey];
            let contentHtml = `<b>${xName}</b>: ${toFixed(xValue)}<br><b>${yName}</b>: ${toFixed(yValue)}`;

            if (sizeKey) {
                contentHtml += `<br><b>${sizeName}</b>: ${seriesDatum[sizeKey]}`;
            }

            if (labelKey) {
                contentHtml = `<b>${labelName}</b>: ${seriesDatum[labelKey]}<br>` + contentHtml;
            }

            return `${titleHtml}<div class="content">${contentHtml}</div>`;
        }
    }

    listSeriesItems(data: LegendDatum[]): void {
        const { id, title, visible, xKey, yKey, marker } = this;

        if (this.data.length && xKey && yKey) {
            data.push({
                id,
                itemId: undefined,
                enabled: visible,
                label: {
                    text: title || yKey
                },
                marker: {
                    type: marker.type,
                    fill: marker.fill || 'gray',
                    stroke: marker.stroke || 'black',
                    fillOpacity: marker.fillOpacity,
                    strokeOpacity: marker.strokeOpacity
                }
            });
        }
    }
}
