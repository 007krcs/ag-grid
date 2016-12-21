<?php
$key = "Keyboard Navigation";
$pageTitle = "ag-Grid Keyboard Navigation";
$pageDescription = "ag-Grid Keyboard Navigation";
$pageKeyboards = "ag-Grid Keyboard Navigation";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2>Keyboard Navigation</h2>

    <p>
        Clicking on a cell gives the cell focus. You can then navigate and interact with the grid in the
        following ways...
    </p>

    <h4>Navigation</h4>

    <p>
        Use the arrow keys to move focus to the selection up, down, left and right. If the selected cell is
        already on the boundary for that position (eg if on the first column and the left key is pressed)
        then the key press has no effect.
    </p>

    <p>
        If using grouping and <i>groupUseEntireRow=true</i>, then the group row is not focusable. When
        navigating, the grouping row is skipped.
    </p>

    <h4>Groups</h4>

    <p>
        If on a group element, hitting the Enter key will expand or collapse the group. This only works
        when displaying groups in a column (<i>groupUseEntireRow=false</i>), as otherwise the group cell
        is not selectable.
    </p>

    <h4>Editing</h4>

    <p>
        Pressing the Enter key on a cell will put the cell into edit mode, if editing is allowed on the cell.
        This will work for the default cell editor.
    </p>

    <h4>Selection</h4>

    <p>
        Pressing the Space key on a cell will select the cells row, or deselect the row if already selected.
        If multi-select is enabled, then the selection will not remove any previous selections.
    </p>

    <h4>Custom Actions</h4>

    <p>
        Custom cell renderers can listen to key presses on the focused div. The grid element that receives
        the focus is provided to the cell renderers via the <i>eGridCell</i> parameter. You can add your
        own listeners to this cell. Via this method you can listen to any key press and do your own action
        on the cell eg hitting 'x' may execute a command in your application for that cell.
    </p>

    <h4>Suppress Cell Selection</h4>

    <p>
        If you want keyboard navigation turned off, then set <i>suppressCellSelection=true</i> in the <i>gridOptions</i>.
    </p>

    <h4>Example</h4>

    <p>
        All the items above (navigation, editing, groups, selection) are observable in the test drive.
        As such, a separate example is not provided here.
    </p>

    <h2 id="customNavigation">Custom Navigation</h2>

    <p>
        Most people will be happy with the default navigation the grid does when you use the arrow keys
        and the tab key. Some people will want to override this - for example maybe you want the tab key
        to navigate to the cell below, not the cell to the right. To facilitate this, the grid offers
        two methods: <i>navigateToNextCell</i> and <i>tabToNextCell</i>.
    </p>

    <h4>navigateToNextCell</h4>

    <p>
        Provide a callback <i>navigateToNextCell</i> if you want to override the arrow key navigation. The
        function signature is as follows:
    </p>

    <pre>export NavigateToNextCellParams {

    <span class="codeComment">// the keycode for the arrow key pressed, left = 37, up = 38, right = 39, down = 40</span>
    key: number;

    <span class="codeComment">// the cell that currently has focus</span>
    previousCellDef: GridCellDef;

    <span class="codeComment">// the cell the grid would normally pick as the next cell for this navigation</span>
    nextCellDef: GridCellDef;
}</pre>

     <h4>tabToNextCell</h4>

    <p>
        Provide a callback <i>tabToNextCell</i> if you want to override the tab key navigation. The
        parameter object is as follows:
    </p>

    <pre>interface TabToNextCellParams {

    <span class="codeComment">// true if the shift key is also down</span>
    backwards: boolean;

    <span class="codeComment">// true if the current cell is editing (you may want to skip cells that are not editable,</span>
    <span class="codeComment">// as the grid will enter the next cell in editing mode also if tabbing)</span>
    editing: boolean;

    <span class="codeComment">// the cell that currently has focus</span>
    previousCellDef: GridCellDef;

    <span class="codeComment">// the cell the grid would normally pick as the next cell for this navigation</span>
    nextCellDef: GridCellDef;
}</pre>

    <h4>GridCellDef</h4>

    <p>
        Both functions above use GridCellDef. This is an object that represents a cell in the grid. It's
        interface is as follows:
    </p>

    <pre>interface GridCellDef {

    <span class="codeComment">// either 'top', 'bottom' or undefined/null (for not floating)</span>
    floating: string;

    <span class="codeComment">// a positive number from 0 to n, where n is the last row the grid is rendering</span>
    rowIndex: number;

    <span class="codeComment">// the grid column</span>
    column: Column;
}</pre>

    <p>
        The functions take a GridCellDef for current and next cells, as well as returning a GridCellDef object.
        The returned GridCellDef will be the one the grid puts focus on next. Return the provided <i>nextCellDef</i>
        to stick with the grid default behaviour. Return null/undefined to skip the navigation.
    </p>

    <h4>Example Customer Navigation</h4>

    <p>
        The example below shows both <i>navigateToNextCell</i> and <i>tabToNextCell</i> in practice.
        <i>navigateToNextCell</i> swaps the up and down arrow keys. <i>tabToNextCell</i> uses tabbing
        to go up and down rather than right and left.
    </p>

    <show-example example="exampleNavigation"></show-example>

</div>

<?php include '../documentation-main/documentation_footer.php';?>
