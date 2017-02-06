<?php
$key = "Cell Rendering VueJS";
$pageTitle = "ag-Grid Cell Rendering";
$pageDescription = "You can customise every cell in ag-Grid. This is done by providing cell renderers. This page describe creating cell renderers.";
$pageKeyboards = "ag-Grid Cell Renderers";
include '../documentation-main/documentation_header.php';
?>

<!-- vuejs from here -->
<h2 id="vueCellRendering">
    <img src="../images/vue_large.png" style="width: 60px;"/>
    VueJS Cell Rendering
</h2>

<p>
    It is possible to provide a VueJS cellRenderers for ag-Grid to use. All of the information above is
    relevant to VueJS cellRenderers. This section explains how to apply this logic to your VueJS component.
</p>

<p>
    For examples on VueJS cellRendering, see the
    <a href="https://github.com/ceolter/ag-grid-vue-example">ag-grid-vue-example</a> on Github.
    VueJS Renderers are used on all but the first Grid on this example page (the first grid uses plain JavaScript Renderers)</p>
</p>

<h3><img src="../images/vue_large.png" style="width: 20px;"/> Specifying a VueJS cellRenderer</h3>

<p>
    If you are using the ag-grid-vue component to create the ag-Grid instance,
    then you will have the option of additionally specifying the cellRenderers
    as VueJS components.</p>

    <p>A VueJS component can be defined in a few different ways (please see <a href="/best-vuejs-data-grid#define_component">
        Defining VueJS Components</a> for all the options), but in this example we're going to define our renderer as a Single File Component:</p>

<pre ng-non-bindable><span class="codeComment">// create your cellRenderer as a VueJS component</span>
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

<span class="codeComment">// then reference the Component in your colDef like this</span>
{
    <span class="codeComment">// instead of cellRenderer we use cellRendererFramework</span>
    cellRendererFramework: CurrencyComponent,

    <span class="codeComment">// specify all the other fields as normal</span>
    headerName: "Currency (Filter)",
    field: "currency",
    colId: "params",
    width: 150
}
</pre>

<p>The Grid cell's value will be made available implicitly in a data value names <code>params</code>. This value will be available to
    you from the <code>created</code> VueJS lifecycle hook.</p>

<p>You can think of this as you having defined the following:</p>
<pre>
export default {
    data () {
        return {
            params: null
        }
    },
    ...
</pre>

<p>but you do not need to do this - this is made available to you behind the scenes, and contains the cells value.</p>

<p>
    By using <i>colDef.cellRendererFramework</i> (instead of <i>colDef.cellRenderer</i>) the grid
    will know it's a VueJS component, based on the fact that you are using the VueJS version of
    ag-Grid.
</p>

<p>
    This same mechanism can be to use a VueJS Component in the following locations:
<ul>
    <li>colDef.cellRenderer<b>Framework</b></li>
    <li>colDef.floatingCellRenderer<b>Framework</b></li>
    <li>gridOptions.fullWidthCellRenderer<b>Framework</b></li>
    <li>gridOptions.groupRowRenderer<b>Framework</b></li>
    <li>gridOptions.groupRowInnerRenderer<b>Framework</b></li>
</ul>
In other words, wherever you specify a normal cellRenderer, you can now specify a VueJS cellRenderer
in the property of the same name excepting ending 'Framework'. As long as you are using the VueJS ag-Grid component,
the grid will know the framework to use is VueJS.
</p>

<h3>Example: Rendering using VueJS Components</h3>
<p>
    Using VueJS Components in the Cell Renderers
</p>
<show-example url="../vue-examples/#/dynamic"
              jsfile="../vue-examples/src/dynamic-component-example/DynamicComponentExample.vue"
              exampleHeight="525px"></show-example>

<h3><img src="../images/vue_large.png" style="width: 20px;"/> VueJS Methods / Lifecycle</h3>

<p>
    All of the methods in the ICellRenderer interface described above are applicable
    to the VueJS Component with the following exceptions:
<ul>
    <li><i>init()</i> is not used. The cells value is made available implicitly via a data field called <code>params</code>.</li>
    <li><i>getGui()</i> is not used. Instead do normal VueJS magic in your Component via the VueJS template.</li>
</ul>

<h3><img src="../images/vue_large.png" style="width: 20px;"/> Handling Refresh</h3>

<p>To receive update (for example, after an edit) you should implement the optional <code>refresh</code> method on the <code>AgRendererComponent</code> interface.</p>

<h3>Example: Rendering using more complex VueJS Components</h3>
<p>
    Using more complex VueJS Components in the Cell Renderers
</p>
<show-example url="../vue-examples/#/rich-dynamic"
              jsfile="../vue-examples/src/rich-dynamic-component-example/RichDynamicComponentExample.vue"
              exampleHeight="525px"></show-example>

<note>The full <a href="https://github.com/ceolter/ag-grid-vue-example">ag-grid-vue-example</a> repo shows many more examples for rendering, including grouped rows, full width renderers
    and so on, as well as examples on using VueJS Components with both CellEditors and Filters</note>

<?php include '../documentation-main/documentation_footer.php';?>

