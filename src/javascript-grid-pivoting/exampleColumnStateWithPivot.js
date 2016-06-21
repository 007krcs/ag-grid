var columnDefs = [
    {headerName: "Athlete", field: "athlete", width: 150, type: 'dimension'},
    {headerName: "Age", field: "age", width: 90, type: 'value'},
    {headerName: "Country", field: "country", width: 120, type: 'dimension'},
    {headerName: "Year", field: "year", width: 90, type: 'dimension'},
    {headerName: "Date", field: "date", width: 110, type: 'dimension'},
    {headerName: "Sport", field: "sport", width: 110, type: 'dimension', pivotIndex: 1},
    {headerName: "Gold", field: "gold", width: 100, type: 'value'},
    {headerName: "Silver", field: "silver", width: 100, type: 'value'},
    {headerName: "Bronze", field: "bronze", width: 100, type: 'value'},
    {headerName: "Total", field: "total", width: 100, type: 'value'}
];

var gridOptions = {
    // set rowData to null or undefined to show loading panel by default
    showToolPanel: true,
    enableColResize: true,
    columnDefs: columnDefs
};

var savedState;
var savedPivotMode;

function printState() {
    var state = gridOptions.columnApi.getColumnState();
    console.log(state);
}

function saveState() {
    savedState = gridOptions.columnApi.getColumnState();
    savedPivotMode = gridOptions.columnApi.isPivotMode();
    console.log('column state saved');
}

function restoreState() {
    gridOptions.columnApi.setColumnState(savedState);
    gridOptions.columnApi.setPivotMode(savedPivotMode);
    console.log('column state restored');
}

function togglePivotMode() {
    var pivotMode = gridOptions.columnApi.isPivotMode();
    gridOptions.columnApi.setPivotMode(!pivotMode);
}

function resetState() {
    gridOptions.columnApi.resetColumnState();
    gridOptions.columnApi.setPivotMode(false);
    console.log('column state reset');
}

// setup the grid after the page has finished loading
document.addEventListener('DOMContentLoaded', function() {
    var gridDiv = document.querySelector('#myGrid');
    new agGrid.Grid(gridDiv, gridOptions);

    // do http request to get our sample data - not using any framework to keep the example self contained.
    // you will probably use a framework like JQuery, Angular or something else to do your HTTP calls.
    var httpRequest = new XMLHttpRequest();
    httpRequest.open('GET', '../olympicWinners.json');
    httpRequest.send();
    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState == 4 && httpRequest.status == 200) {
            var httpResult = JSON.parse(httpRequest.responseText);
            gridOptions.api.setRowData(httpResult);
        }
    };
});