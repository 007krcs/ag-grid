<?php
$pageTitle = "ag-Grid Examples: Polymer Grouped Row Renderer";
$pageDescription = "ag-Grid is a feature-rich datagrid available in Free or Enterprise versions. This page shows a Polymer grouped row renderer example.";
$pageKeyboards = "ag-Grid polymer grouped row component";
$pageGroup = "examples";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2>Group Row Inner Renderer</h2>
    <p>A Group Row Inner Renderer Example</p>

    <?= example('Group Row Inner Renderer', 'grouped-inner-row-components', 'polymer', array("exampleHeight" => 350, "enterprise" => 1)) ?>
</div>

<?php include '../documentation-main/documentation_footer.php';?>
