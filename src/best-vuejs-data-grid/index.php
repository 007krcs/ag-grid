<?php
$key = "Getting Started VueJS";
$pageTitle = "VueJS Datagrid";
$pageDescription = "Demonstrate the best VueJS datagrid. Shows and example of a datagrid for using with VueJS.";
$pageKeyboards = "VueJS Grid";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h1>Implementing the VueJS Datagrid</h1>

    <p>
        If you are building an VueJS application then you have the choice between A) using the plain JavaScript version
        of ag-Grid or B) using the ag-Grid VueJS Component from the <a href="https://github.com/ceolter/ag-grid-vue">
            ag-grid-vue</a> project. If you use the ag-Grid VueJS Component, then the grid's properties, events and API
        will all tie in with the VueJS ecosystem. This will make your VueJS coding easier.
    </p>

    <note>Please use the github project <a href="https://github.com/ceolter/ag-grid-vuejs">ag-grid-vue</a>
        for feedback or issue reporting around ag-Grid's support for VueJS.</note>

    <h2>ag-Grid VueJS Features</h2>

    <p>
        Every feature of ag-Grid is available when using the ag-Grid VueJS Component. The VueJS Component wraps
        the functionality of ag-Grid, it doesn't duplicate, so there will be no difference between core ag-Grid and
        VueJS ag-Grid when it comes to features.
    </p>

    <h3>VueJS Full Example</h3>

    <p>
        This page goes through the
        <a href="https://github.com/ceolter/ag-grid-vue-example">ag-grid-vue-example</a>
        on Github.
    </p>

    <p>The example project includes a number of separate grids on a page, with each section demonstrating a different
        feature set:
    <ul>
        <li>A feature rich grid example, demonstrating many of ag-Grid's features using VueJS as a wrapper
            <a href="https://github.com/ceolter/ag-grid-vue-example/blob/master/src/rich-grid-example/RichGridExample.vue" target="_blank" class="fa fa-external-link"> Vue</a>
        </li>
        <li>A Simple Example, using CellRenders created from VueJS Components
            <a href="https://github.com/ceolter/ag-grid-vue-example/blob/master/src/dynamic-component-example/DynamicComponentExample.vue" target="_blank" class="fa fa-external-link"> Vue</a>
        </li>
        <li>A Richer Example, using CellRenderers created from VueJS Components, with child components, and two-way binding (parent to child components events)
            <a href="https://github.com/ceolter/ag-grid-vue-example/blob/master/src/rich-dynamic-component-example/RichDynamicComponentExample.vue" target="_blank" class="fa fa-external-link"> Vue</a>
        </li>
        <li>A Cell Editor example - one with a popup editor, and another with a numeric editor. Each demonstrates different editor related features
            <a href="https://github.com/ceolter/ag-grid-vue-example/blob/master/src/editor-component-example/EditorComponentExample.vue" target="_blank" class="fa fa-external-link"> Vue</a>
        </li>
        <li>A Floating Row Renderer Example
            <a href="https://github.com/ceolter/ag-grid-vue-example/blob/master/src/floating-row-example/FloatingRowExample.vue" target="_blank" class="fa fa-external-link"> Vue</a>
        </li>
        <li>A Full Width Renderer Example
            <a href="https://github.com/ceolter/ag-grid-vue-example/blob/master/src/full-width-example/FullWidthExample.vue" target="_blank" class="fa fa-external-link"> Vue</a>
        </li>
        <li>A Group Row Inner Renderer Example
            <a href="https://github.com/ceolter/ag-grid-vue-example/blob/master/src/grouped-row-example/GroupedRowExample.vue" target="_blank" class="fa fa-external-link"> Vue</a>
        </li>
        <li>A Filter Example, with the filter written as a VueJS Component
            <a href="https://github.com/ceolter/ag-grid-vue-example/blob/master/src/filter-example/FilterExample.vue" target="_blank" class="fa fa-external-link"> Vue</a>
        </li>
        <li>A Master/Detail Example, with both the Master and the Detail elements being VueJS Components
            <ul>
                <li>Master: <a href="https://github.com/ceolter/ag-grid-vue-example/blob/master/src/master-detail-example/MasterDetailExample.vue" target="_blank" class="fa fa-external-link"> Vue</a></li>
                <li>Detail: <a href="https://github.com/ceolter/ag-grid-vue-example/blob/master/src/master-detail-example/DetailPanelComponent.vue" target="_blank" class="fa fa-external-link"> Vue</a></li>
            </ul>
        </li>
    </ul>
    </p>

    <h3>Dependencies</h3>

    <p>
        In your package.json file, specify dependency on ag-grid AND ag-grid-vue.
        The ag-grid package contains the core ag-grid engine and the ag-grid-vue
        contains the VueJS component.
        <pre>"dependencies": {
    ...
    "ag-grid": "8.0.x",
    "ag-grid-vue": "8.0.x"

    <span class="codeComment">// only needed if you're using enterprise features</span>
    "ag-grid-enterprise": "8.0.x",
}</pre>
    The major and minor versions should match. Every time a new major or minor
    version of ag-Grid is released, the component will also be released. However
    for patch versions, the component will not be released.
    </p>

    <p>You will then be able to access ag-Grid inside your application:</p>

    <pre>import {AgGridVue} from 'ag-grid-vue';</pre>

    <p>
        Which you can then use as a component within your application:
    </p>

    <pre>
export default {
    data () {
        return {
            gridOptions: null,
            ..other data
        }
    },
    components: {
        'ag-grid-vue': AgGridVue,
        ..other components
    },
    ... the rest of your application component
}
</pre>

    <p>
        You will need to include the CSS for ag-Grid, either directly inside
        your html page, or as part of creating your bundle if bundling. The following
        shows referencing the css from your web page:
    </p>
    <pre>&lt;link href="node_modules/ag-grid/dist/styles/ag-grid.css" rel="stylesheet" />
&lt;link href="node_modules/ag-grid/dist/styles/theme-fresh.css" rel="stylesheet" />
</pre>

    <p>If you're using the <code>style-loader</code> you can also import the CSS dependencies into your final bundle:</p>
<pre>
import "../node_modules/ag-grid/dist/styles/ag-grid.css"
import "../node_modules/ag-grid/dist/styles/theme-fresh.css"

<span class="codeComment">// only needed if you're using enterprise features</span>
import "ag-grid-enterprise/main";
</pre>

    <p>Importing of the CSS should be done before you use the ag-Grid Vue Component.</p>

    <h2>Configuring ag-Grid in VueJS</h2>

    <p>You can configure the grid in the following ways through VueJS:</p>
    <ul>
        <li><b>Events:</b> All data out of the grid comes through events. These use
            VueJS event bindings eg <i>:modelUpdated="onModelUpdated"</i>.
            As you interact with the grid, the different events are fixed and
            output text to the console (open the dev tools to see the console).
        </li>
        <li><b>Properties:</b> All the data is provided to the grid as VueJS
            bindings. These are bound onto the ag-Grid properties bypassing the
            elements attributes. The values for the bindings come from the parent
            controller.
        </li>
        <li><b>Attributes:</b> When the property is just a simple string value, then
            no binding is necessary, just the value is placed as an attribute
            eg <i>rowHeight="22"</i>.If the attribute is a boolean and a value is not provided, it is taken as false.
        </li>
        <li><b>Changing Properties:</b> When a property changes value, VueJS
            automatically passes the new value onto the grid. This is used in
            the following locations in the "feature rich grid example' above:<br/>
            a) The 'quickFilter' on the top right updates the quick filter of
            the grid.
            b) The 'Show Tool Panel' checkbox has it's value bound to the 'showToolPanel'
            property of the grid.
            c) The 'Refresh Data' generates new data for the grid and updates the
            <i>rowData</i> property.
        </li>
    </ul>

    <p>
        Notice that the grid has it's properties marked as <b>immutable</b>. Hence for
        object properties, the object reference must change for the grid to take impact.
        For example, <i>rowData</i> must be a new list of data for the grid to be
        informed to redraw.
    </p>

    <h3 id="define_component">Defining VueJS Components for use in ag-Grid</h3>
    <p>VueJS components can be provided to ag-Grid in the following ways (the section after documents how to then reference
        these components in your column definitions):</p>

    <h4>Simple, Inline Components</h4>
<pre>
components: {
    'CubeComponent': {
        template: '<span>{{ valueCubed() }}</span>',
        methods: {
            valueCubed() {
                return this.params.value * this.params.value * this.params.value;
            }
        }
    },
    ParamsComponent: {
        template: '<span>Field: {{params.colDef.field}}, Value: {{params.value}}</span>',
        methods: {
            valueCubed() {
                return this.params.value * this.params.value * this.params.value;
            }
        }
    }
}
</pre>

    <p>Note here that we can define the propery name either quoted or not - but note that in order to reference these
        components in your column definitions you'll need to provide them as case-sensitive strings (see referencing components below).</p>

    <h4>Simple, Locally Declared Components</h4>
<pre>
let SquareComponent = Vue.extend({
    template: '<span>{{ valueSquared() }}</span>',
    methods: {
        valueSquared() {
            return this.params.value * this.params.value;
        }
    }
});
</pre>

    <h4>External .js Components</h4>
<pre>
<span class="codeComment">// SquareComponent.js</span>
export default Vue.extend({
    template: '<span>{{ valueSquared() }}</span>',
    methods: {
        valueSquared() {
            return this.params.value * this.params.value;
        }
    }
});
    
<span class="codeComment">// MyGridApp.vue (your Component holding the ag-Grid component)</span>
import SquareComponent from './SquareComponent'
</pre>
    
    <h4>More Complex, External Single File Components (.vue)</h4>
<pre ng-non-bindable>
&lt;template&gt;
    &lt;span class="currency"&gt;{{ params.value | currency('EUR') }}&lt;/span&gt;
&lt;/template&gt;

&lt;script&gt;
    import Vue from "vue";

    export default Vue.extend({
        filters: {
            currency(value, symbol) {
                let result = value;
                if (!isNaN(value)) {
                    result = value.toFixed(2);
                }
                return symbol ? symbol + result : result;
            }
        }
    });
&lt;/script&gt;

&lt;style scoped&gt;
    .currency {
        color: blue;
    }
&lt;/style&gt;
</pre>


    <p>You can then use these components as editors, renderers or filters. Which method you choose depends on preference
        as well as the complexity of your component - for simple components inline is easiest, for more complex ones
        external .vue components will be more manageable.</p>

    <p>Additionally, if you define your components as Single File Components (.vue) then you'll be able to leverage scoped CSS,
    which won't otherwise be possible.</p>

    <h3>Providing VueJS Components to ag-Grid</h3>

    <p>Having defined your component, you can then reference them in your column definitions.</p>

    <p>For inline components (ie defined in the <code>components</code> property) you can
        reference components by either case-sensitive property name, for example:</p>

<pre>
<span class="codeComment">// defined as a quoted string above: 'CubeComponent'</span>
{
    headerName: "Cube",
    field: "value",
    cellRendererFramework: 'CubeComponent',
    colId: "cube",
    width: 125
},
<span class="codeComment">// defined as a value above: ParamsComponent</span>
{
    headerName: "Row Params",
    field: "row",
    cellRendererFramework: 'ParamsComponent',
    colId: "params",
    width: 245
},
</pre>

    <p>In both cases we need to define the component to be used in the cell as a case-senstive string.</p>

    <p>For components defined outside of the application component you can pass them by reference. For example:</p>
<pre>
<span class="codeComment">// import or create our component outside of our app</span>
import CurrencyComponent from './CurrencyComponent.vue'
let SquareComponent = Vue.extend({...rest of the component

<span class="codeComment">// reference the component by reference</span>
this.columnDefs = [
    {headerName: "Row", field: "row", width: 140},
    {
        headerName: "Square",
        field: "value",
        cellRendererFramework: SquareComponent,
        editable: true,
        colId: "square",
        width: 125
    },
    {
        headerName: "Currency (Filter)",
        field: "currency",
        cellRendererFramework: CurrencyComponent,
        colId: "params",
        width: 150
    }
</pre>

    <p>Please see the relevant sections on <a href="../javascript-grid-cell-rendering/#vueCellRendering">cellRenders</a>,
        <a href="../javascript-grid-cell-editing/#vueCellEditing">cellEditors</a> and
        <a href="../javascript-grid-filtering/#vueFiltering">filters</a> for configuring and using VueJS Components in ag-Grid.</p>

    <p>
        The rich-grid example has ag-Grid configured through the template in the following ways:
    </p>

    <pre>
&lt;ag-grid-vue style="width: 100%; height: 350px;" class="ag-fresh"
    <span class="codeComment">// these are attributes, not bound, give explicit values here</span>
    rowHeight="22"
    rowSelection="multiple"

    <span class="codeComment">// these are boolean values</span>
    <span class="codeComment">// (leaving them out will default them to false)</span>
    :enableColResize="true"
    :enableSorting="true"

    <span class="codeComment">// these are bound properties</span>
    :gridOptions="gridOptions"
    :columnDefs="columnDefs"

    <span class="codeComment">// this is a callback</span>
    :isScrollLag="myIsScrollLagFunction"

    <span class="codeComment">// these are registering event callbacks</span>
    :modelUpdated="onModelUpdated"
    :cellClicked="onCellClicked"
&lt;/ag-grid-vue></code></pre>

    <p>
        The above is all you need to get started using ag-Grid in a VueJS application. Now would
        be a good time to try it in a simple app and get some data displaying and practice with
        some of the grid settings before moving onto the advanced features of cellRendering
        and custom filtering.
    </p>

    <h3>Building & Building</h3>
    <p>There are many ways to build and/or bundle an VueJS Application. We provide fully working examples using a simplified
        Webpack build as part of the <a href="https://github.com/ceolter/ag-grid-vue-example">ag-grid-vue-example</a> on GitHub.</p>

    <h2>ag-Grid VueJS Examples</h2>
    <h3>Example: Rich Grid without Components</h3>
    <p>
        The example below shows a rich configuration of ag-Grid, with no VueJS Components.
    </p>
    <show-example example="../vue-examples/"
                  jsfile="../vue-examples/src/rich-grid-example/RichGridExample.vue"
                  exampleHeight="525px"></show-example>

    <h2>Cell Rendering & Cell Editing using VueJS</h2>

    <p>
        It is possible to build
        <a href="../javascript-grid-cell-rendering/#ng2CellRendering">cellRenders</a>,
        <a href="../javascript-grid-cell-editing/#ng2CellEditing">cellEditors</a> and
        <a href="../javascript-grid-filtering/#ng2Filtering">filters</a> using VueJS. Doing each of these
        is explained in the section on each.
    </p>

    <p>
        Although it is possible to use VueJS for your customisations of ag-Grid, it is not necessary. The grid
        will happily work with both VueJS and non-VueJS portions (eg cellRenderers in VueJS or normal JavaScript).
        If you do use VueJS, be aware that you are adding an extra layer of indirection into ag-Grid. ag-Grid's
        internal framework is already highly tuned to work incredibly fast and does not require VueJS or anything
        else to make it faster. If you are looking for a lightning fast grid, even if you are using VueJS and
        the ag-grid-vue component, consider using plain ag-Grid Components (as explained on the pages for
        rendering etc) inside ag-Grid instead of creating VueJS counterparts.
    </p>

    <h2>Next Steps...</h2>

    <p>
        Now you can go to <a href="../javascript-grid-interfacing-overview/">interfacing</a>
        to learn about accessing all the features of the grid.
    </p>

</div>

<?php include '../documentation-main/documentation_footer.php'; ?>
