<?php
$key = "Getting Started ng2";
$pageTitle = "Angular Datagrid";
$pageDescription = "Demonstrate the best Angular datagrid. Shows and example of a datagrid for using with Angular.";
$pageKeyboards = "Angular Grid";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h1 id="implementing-the-angular-datagrid">Implementing the Angular Datagrid</h1>

    <p>
        If you are building an Angular application then you have the choice between A) using the plain JavaScript version
        of ag-Grid or B) using the ag-Grid Angular Component from the <a href="https://github.com/ceolter/ag-grid-angular">
            ag-grid-angular</a> project. If you use the ag-Grid Angular Component, then the grid's properties, events and API
        will all tie in with the Angular ecosystem. This will make your Angular coding easier.
    </p>

    <note>Please use the github project <a href="https://github.com/ceolter/ag-grid-angular">ag-grid-angular</a>
        for feedback or issue reporting around ag-Grid's support for Angular.</note>

    <h2 id="ag-grid-angular-features">ag-Grid Angular Features</h2>

    <p>
        Every feature of ag-Grid is available when using the ag-Grid Angular Component. The Angular Component wraps
        the functionality of ag-Grid, it doesn't duplicate, so there will be no difference between core ag-Grid and
        Angular ag-Grid when it comes to features.
    </p>

    <h3 id="angular-full-axample">Angular Full Example</h3>

    <p>
        This page goes through the
        <a href="https://github.com/ceolter/ag-grid-angular-example">ag-grid-angular-example</a>
        on Github.</p>

    <p>The example project includes a number of separate grids on a page, with each section demonstrating a different
        feature set:
    <ul>
        <li>A feature rich grid example, demonstrating many of ag-Grid's features using Angular as a wrapper
            <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/rich-grid.component.ts" target="_blank" class="fa fa-external-link"> TypeScript</a> <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/rich-grid.component.html" target="_blank" class="fa fa-external-link"> html</a>
        </li>
        <li>An example using markup to create a grid
            <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/rich-grid-declarative.component.ts" target="_blank" class="fa fa-external-link"> TypeScript</a> <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/rich-grid-declarative.component.html" target="_blank" class="fa fa-external-link"> html</a>
        </li>
        <li>A Simple Example, using CellRenderers created from Angular Components
            <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/from-component.component.ts" target="_blank" class="fa fa-external-link"> TypeScript</a> <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/from-component.component.html" target="_blank" class="fa fa-external-link"> html</a>
        </li>
        <li>A Richer Example, using CellRenderers created from Angular Components, with child components, and two-way binding (parent to child components events)
            <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/from-rich.component.ts" target="_blank" class="fa fa-external-link"> TypeScript</a> <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/from-rich.component.html" target="_blank" class="fa fa-external-link"> html</a>
        </li>
        <li>A Cell Editor example - one with a popup editor, and another with a numeric editor. Each demonstrates different editor related features
            <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/editor-component.component.ts" target="_blank" class="fa fa-external-link"> TypeScript</a> <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/editor-component.component.html" target="_blank" class="fa fa-external-link"> html</a>
        </li>
        <li>A Floating Row Renderer Example
            <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/floating-row-renderer.component.ts" target="_blank" class="fa fa-external-link"> TypeScript</a> <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/floating-row-renderer.component.html" target="_blank" class="fa fa-external-link"> html</a>
        </li>
        <li>A Full Width Renderer Example
            <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/full-width-renderer.component.ts" target="_blank" class="fa fa-external-link"> TypeScript</a> <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/full-width-renderer.component.html" target="_blank" class="fa fa-external-link"> html</a>
        </li>
        <li>A Group Row Inner Renderer Example
            <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/group-row-renderer.component.ts" target="_blank" class="fa fa-external-link"> TypeScript</a> <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/group-row-renderer.component.html" target="_blank" class="fa fa-external-link"> html</a>
        </li>
        <li>A Filter Example, with the filter written as a Angular Component
            <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/filter-component.component.ts" target="_blank" class="fa fa-external-link"> TypeScript</a> <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/filter-component.component.html" target="_blank" class="fa fa-external-link"> html</a>
        </li>
        <li>A Master/Detail Example, with both the Master and the Detail elements being Angular Components
            <ul>
                <li>Master: <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/masterdetail-master.component.ts" target="_blank" class="fa fa-external-link"> TypeScript</a> <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/masterdetail-master.component.html" target="_blank" class="fa fa-external-link"> html</a></li>
                <li>Detail: <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/detail-panel.component.ts" target="_blank" class="fa fa-external-link"> TypeScript</a> <a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/detail-panel.component.html" target="_blank" class="fa fa-external-link"> html</a></li>
            </ul>
        </li>
    </ul>
    </p>

    <h3 id="dependencies">Dependencies</h3>

    <p>
        In your package.json file, specify dependency on ag-grid AND ag-grid-angular.
        The ag-grid package contains the core ag-grid engine and the ag-grid-angular
        contains the Angular component.
        <pre>"dependencies": {
    ...
    "ag-grid": "8.1.x",
    "ag-grid-angular": "8.1.x"
}</pre>
    The major and minor versions should match. Every time a new major or minor
    version of ag-Grid is released, the component will also be released. However
    for patch versions, the component will not be released.
    </p>

    <p>You will then be able to access ag-Grid inside your application:</p>

    <pre>import {AgGridModule} from 'ag-grid-angular/main';</pre>

    <p>
        Which you can then use as a dependency inside your module:
    </p>

    <pre>@NgModule({
    imports: [
        BrowserModule,
        AgGridModule.withComponents([...optional Angular Components to be used in the grid....]]),
        ...
})</pre>

    <p>
        You will need to include the CSS for ag-Grid, either directly inside
        your html page, or as part of creating your bundle if bundling. The following
        shows referencing the css from your web page:
    </p>
    <pre>&lt;link href="node_modules/ag-grid/dist/styles/ag-grid.css" rel="stylesheet" />
&lt;link href="node_modules/ag-grid/dist/styles/theme-fresh.css" rel="stylesheet" />
</pre>

    <h2 id="configuring-ag-grid-in-angular">Configuring ag-Grid in Angular</h2>

    <p>You can configure the grid in the following ways through Angular:</p>
    <ul>
        <li><b>Events:</b> All data out of the grid comes through events. These use
            Angular event bindings eg <i>(modelUpdated)="onModelUpdated()"</i>.
            As you interact with the grid, the different events are fixed and
            output text to the console (open the dev tools to see the console).
        </li>
        <li><b>Properties:</b> All the data is provided to the grid as Angular
            bindings. These are bound onto the ag-Grid properties bypassing the
            elements attributes. The values for the bindings come from the parent
            controller.
        </li>
        <li><b>Attributes:</b> When the property is just a simple string value, then
            no binding is necessary, just the value is placed as an attribute
            eg <i>rowHeight="22"</i>. Notice that boolean attributes are defaulted
            to 'true' IF they attribute is provided WITHOUT any value. If the attribute
            is not provided, it is taken as false.
        </li>
        <li><b>Grid API via IDs:</b> The grid in the example is created with an id
            by marking it with <i>#agGrid</i>. This in turn turns into a variable
            which can be used to access the grid's controller. The buttons
            Grid API and Column API buttons use this variable to access the grids
            API (the API's are attributes on the controller).
        </li>
        <li><b>Changing Properties:</b> When a property changes value, AngularJS
            automatically passes the new value onto the grid. This is used in
            the following locations in the "feature rich grid example" above:<br/>
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

    <note>
        Sometimes the gridReady grid event can fire before the Angular component is ready to receive it, so in an Angular
        environment its safer to on you cannot safely rely on <code>AfterViewInit</code> instead before using the API
    </note>

    <h3 id="providing-angular-components-to-ag-grid">Providing Angular Components to ag-Grid</h3>
    <p>In order for ag-Grid to be able to use your Angular Components, you need to provide them in the <strong>top level</strong> module:</p>
<pre>
@NgModule({
imports: [
    BrowserModule,
    FormsModule,
    RouterModule.forRoot(appRoutes),
    AgGridModule.withComponents(
        [
            SquareComponent,
            CubeComponent,
            ...other components
</pre>

    <p>You can then use these components as editors, renderers or filters. For example, to use an Angular Component as a Cell Renderer, you would do the following:</p>
<pre>
let colDefs = [
    {
        headerName: "Square Component",
        field: "value",
        cellRendererFramework: SquareComponent,
        editable:true,
        colId: "square",
        width: 175
    },
    ...other column definitions
]
</pre>
    <p>Please see the relevant sections on <a href="../javascript-grid-cell-rendering/#ng2CellRendering">cellRenderers</a>,
        <a href="../javascript-grid-cell-editing/#ng2CellEditing">cellEditors</a> and
        <a href="../javascript-grid-filtering/#ng2Filtering">filters</a> for configuring and using Angular Components in ag-Grid.</p>

    <p>
        The example has ag-Grid configured through the template in the following ways:
    </p>

    <pre><span class="codeComment">// notice the grid has an id called agGrid, which can be used to call the API</span>
&lt;ag-grid-angular #agGrid style="width: 100%; height: 350px;" class="ag-fresh"

    <span class="codeComment">// items bound to properties on the controller</span>
    [gridOptions]="gridOptions"
    [columnDefs]="columnDefs"
    [showToolPanel]="showToolPanel"
    [rowData]="rowData"

    <span class="codeComment">// boolean values 'turned on'</span>
    enableColResize
    enableSorting
    enableFilter

    <span class="codeComment">// simple values, not bound</span>
    rowHeight="22"
    rowSelection="multiple"

    <span class="codeComment">// event callbacks</span>
    (modelUpdated)="onModelUpdated()"
    (cellClicked)="onCellClicked($event)"
    (cellDoubleClicked)="onCellDoubleClicked($event)">

&lt;/ag-grid-angular></pre>

    <p>
        The above is all you need to get started using ag-Grid in a Angular application. Now would
        be a good time to try it in a simple app and get some data displaying and practice with
        some of the grid settings before moving onto the advanced features of cellRendering
        and custom filtering.
    </p>

    <h4 id="parent_child">Child to Parent Communication</h4>

    <p>There are a variety of ways to manage component communication in Angular (shared service, local variables etc), but you
        often need a simple way to let a "parent" component know that something has happened on a "child" component. In this case
        the simplest route is to use the <code>gridOptions.context</code> to hold a reference to the parent, which the child can then access.</p>

    <pre>
<span class="codeComment">// in the parent component - the component that hosts ag-grid-angular and specifies which angular components to use in the grid</span>
constructor() {
    this.gridOptions = &lt;GridOptions&gt;{
        context: {
            componentParent: this
        }
    };
    this.gridOptions.rowData = this.createRowData();
    this.gridOptions.columnDefs = this.createColumnDefs();
}

<span class="codeComment">// in the child component - the angular components created dynamically in the grid</span>
<span class="codeComment">// the parent component can then be accessed as follows:</span>
this.params.context.componentParent
</pre>

    <p>Note that although we've used <code>componentParent</code> as the property name here it can be anything - the main
        point is that you can use the <code>context</code> mechanism to share information between the components.</p>

    <p>The <span style="font-style: italic">"A Simple Example, using CellRenderers created from Angular Components"</span> above illustrates this in the Child/Parent column:</p>
    <ul>
        <li><a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/from-component.component.ts" target="_blank" class="fa fa-external-link"> Parent Component</a></li>
        <li><a href="https://github.com/ceolter/ag-grid-angular-example/blob/master/systemjs_aot/app/child-message.component.ts" target="_blank" class="fa fa-external-link"> Child Component</a></li>
    </ul>

    <h3 id="building-bundling">Building & Bundling</h3>
    <p>There are many ways to build and/or bundle an Angular Application. We provide 3 full working examples using
        either SystemJS, Webpack or Angular-CLI as part of the <a href="https://github.com/ceolter/ag-grid-angular-example">ag-grid-angular-example</a> on GitHub.</p>
    <p>We document the main parts of these tools here, but please refer to the examples for more detail.</p>

    <ul>
        <li>
            <a href="/ag-grid-angular-angularcli"> Angular CLI</a>
        </li>
        <li>
            <a href="/ag-grid-angular-webpack"> Webpack</a>
        </li>
        <li>
            <a href="/ag-grid-angular-systemjs"> SystemJS</a>
        </li>
    </ul>

    <h2 id="ag-grid-angular-examples">ag-Grid Angular Examples</h2>
    <h3 id="example-rich-grid-without-components">Example: Rich Grid without Components</h3>
    <p>
        The example below shows a rich configuration of ag-Grid, with no Angular Components.
    </p>
    <show-example example="../ng2-example/index.html?fromDocs=true&example=rich-grid"
                  jsfile="../ng2-example/app/rich-grid.component.ts"
                  html="../ng2-example/app/rich-grid.component.html"
                  exampleHeight="525px"></show-example>

    <h2 id="ng2markup">Creating Grids with Markup</h2>

    <p>You can create Grids either programatically (with pure JavaScript/Typescript/Components), or declare them via declaratively with markup.</p>
    <p>The above section details how to specify the Grid itself. To declare columns you can specify them as follows:</p>

    <h3 id="column-definition">Column Definition</h3>
<pre>
&lt;ag-grid-column headerName="Name" field="name" [width]="150">&lt;/ag-grid-column>
</pre>

    <p>This example declares a simple Column Definition, specifying header name, field and width.</p>

    <h3 id="setting-column-properties">Setting Column Properties</h3>
    <p>There are some simple rules you should follow when setting column properties via Markup:</p>
<pre ng-non-bindable>
<span class="codeComment">// string value</span>
propertyName="String Value"
[propertyName]="'String Value'"
[propertyName]="{{Interpolated Value}}"
[propertyName]="functionCallReturningAString()"

<span class="codeComment">// boolean value</span>
[propertyName]="true|false"
[propertyName]="{{Interpolated Value}}"
[propertyName]="functionCallReturningABoolean()"

<span class="codeComment">// numeric value</span>
[propertyName]="Numeric Value"
[propertyName]="functionCallReturningANumber()"

<span class="codeComment">// function value</span>
[propertyName]="functionName"
[propertyName]="functionCallReturningAFunction()"
</pre>

    <h4 id="setting-a-class-or-a-complex-value">Setting a Class or a Complex Value:</h4>
    <p>You can set a Class or a Complex property in the following way:</p>
<pre>
<span class="codeComment">// return a Class definition for a Filter</span>
[filter]="getSkillFilter()"

private getSkillFilter():any {
    return SkillFilter;
}

<span class="codeComment">// return an Object for filterParams</span>
[filterParams]="getCountryFilterParams()"

private getCountryFilterParams():any {
    return {
        cellRenderer: this.countryCellRenderer,
        cellHeight: 20
    }
}
</pre>

    <h3 id="grouped-column-definition">Grouped Column Definition</h3>
    <p>To specify a Grouped Column, you can nest a column defintion:</p>
<pre ng-non-bindable>
&lt;ag-grid-column headerName="IT Skills">
    &lt;ag-grid-column headerName="Skills" [width]="125" [suppressSorting]="true" [cellRenderer]="skillsCellRenderer" [filter]="getSkillFilter()">&lt;/ag-grid-column>
    &lt;ag-grid-column headerName="Proficiency" field="proficiency" [width]="120" [cellRenderer]="percentCellRenderer" [filter]="getProficiencyFilter()">&lt;/ag-grid-column>
&lt;/ag-grid-column>
</pre>
    <p>In this example we have a parent Column of "IT Skills", with two child columns.</p>

    <h3 id="example-rich-grid-using-markup">Example: Rich Grid using Markup</h3>
    <p>
        The example below shows the same rich grid as the example above, but with configuration done via Markup.
    </p>
    <show-example
            example="../ng2-example/index.html?fromDocs=true&example=rich-grid-declarative"
            jsfile="../ng2-example/app/rich-grid-declarative.component.ts"
            html="../ng2-example/app/rich-grid-declarative.component.html"
            exampleHeight="525px"></show-example>

    <h2 id="cell-rendering-cell-editing-using-angular">Cell Rendering & Cell Editing using Angular</h2>

    <p>
        It is possible to build
        <a href="../javascript-grid-cell-rendering/#ng2CellRendering">cellRenderers</a>,
        <a href="../javascript-grid-cell-editing/#ng2CellEditing">cellEditors</a> and
        <a href="../javascript-grid-filtering/#ng2Filtering">filters</a> using Angular. Doing each of these
        is explained in the section on each.
    </p>

    <p>
        Although it is possible to use Angular for your customisations of ag-Grid, it is not necessary. The grid
        will happily work with both Angular and non-Angular portions (eg cellRenderers in Angular or normal JavaScript).
        If you do use Angular, be aware that you are adding an extra layer of indirection into ag-Grid. ag-Grid's
        internal framework is already highly tuned to work incredibly fast and does not require Angular or anything
        else to make it faster. If you are looking for a lightning fast grid, even if you are using Angular and
        the ag-grid-angular component, consider using plain ag-Grid Components (as explained on the pages for
        rendering etc) inside ag-Grid instead of creating Angular counterparts.
    </p>

    <h2 id="next-steps">Next Steps...</h2>

    <p>
        Now you can go to <a href="../javascript-grid-interfacing-overview/">interfacing</a>
        to learn about accessing all the features of the grid.
    </p>

</div>

<?php include '../documentation-main/documentation_footer.php'; ?>
