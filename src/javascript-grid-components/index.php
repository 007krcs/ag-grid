<?php
$key = "Components";
$pageTitle = "ag-Grid Components";
$pageDescription = "ag-Grid Components";
$pageKeyboards = "ag-Grid Components";
$pageGroup = "components";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2 id="Components">Components</h2>

    <p>
        By default, the grid does not need to you to provide any components.
        However to allow you to customise the grid, it allows you to plug
        your own components into the grid.
    </p>

    <p>
        The following sections show how to use your own components inside the grid.
        Each component can be done using plain JavaScript or using one of the
        supported
    </p>

    <h2>JavaScript or Framework</h2>

    <p>
        A component in ag-Grid means an ag-Grid component. It does not necessarily
        mean using a component from a framework (eg a React or Angular component).
        If you are using a framework, then you have a choice of the following:
        <ol>
            <li>Provide an ag-Grid component in JavaScript.</li>
            <li>Provide an ag-Grid component as a framework component (eg React or Angular).</li>
        </ol>
        So if using a framework, you have the choice of using the framework to provide
        the component or just plain JavaScript.
    </p>

    <p>
        If using a framework, the the documentation first explains how to build the
        component using plain JavaScript and then goes onto how to use the framework
        specific component. This is because the framework specific component builds
        on what you learn from the JavaScript component.
    </p>

</div>

<?php include '../documentation-main/documentation_footer.php';?>