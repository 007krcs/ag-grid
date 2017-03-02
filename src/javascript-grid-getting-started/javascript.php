<?php if (!isFrameworkAll()) { ?>
    <h2><img style="vertical-align: middle" src="/images/javascript.png" height="25px"/> Overview</h2>
<?php } ?>

<?php include 'ag-grid-dependency.php' ?>

<p>Here we've referenced the ag-Grid dependency in the <code>head</code> section, and specified a <code>div</code> with
    an ID of <code>myGrid</code>.</p>
<p>We've also specified the <a href="../http://localhost:8080/javascript-grid-themes/fresh-theme.php">Fresh Theme</a> -
    themes are we
    we can define the look and feel of the Grid. More on that later.
</p>
<p><code>example1.js</code> would be where your application code would live in this example.</p>


<h3 id="javascript-simple-grid">Creating the Grid</h3>

<p>Now that we have a <code>div</code> for the Grid, we need to specify the following at a minimum:</p>
<ul>
    <li>Columns</li>
    <li>Row Data</li>
</ul>

<p>So let's create a simply example with 3 columns and 3 rows of data:</p>
<pre>
<span class="codeComment">// specify the columns</span>
var columnDefs = [
    {headerName: "Make", field: "make"},
    {headerName: "Model", field: "model"},
    {headerName: "Price", field: "price"}
];

<span class="codeComment">// specify the data</span>
var rowData = [
    {make: "Toyota", model: "Celica", price: 35000},
    {make: "Ford", model: "Mondeo", price: 32000},
    {make: "Porsche", model: "Boxter", price: 72000}
];

<span class="codeComment">// let the grid know which columns and what data to use</span>
var gridOptions = {
    columnDefs: columnDefs,
    rowData: rowData
};

<span class="codeComment">// wait for the document to be loaded, otherwise ag-Grid will not find the div in the document.</span>
document.addEventListener("DOMContentLoaded", function() {

    <span class="codeComment">// lookup the container we want the Grid to use</span>
    var eGridDiv = document.querySelector('#myGrid');

    <span class="codeComment">// create the grid passing in the div to use together with the columns & data we want to use</span>
    new agGrid.Grid(eGridDiv, gridOptions);
});
</pre>

<p>With that in place we have a quick and simple Grid up and running:</p>

<show-complex-example example="example-js.html"
                      sources="{
                            [
                                { root: './', files: 'example-js.html,example-js.js' }
                            ]
                          }"
                      plunker="https://embed.plnkr.co/369YrrgCVrnPjD528OtT/"
                      exampleheight="130px">
</show-complex-example>

</div>
