<?php
$key = "Angular SystemJS";
$pageTitle = "Angular Datagrid using SystemJS";
$pageDescription = "Demonstrate the best Angular datagrid using SystemJS and SystemJS Builder";
$pageKeyboards = "Angular Grid SystemJS";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h1>Angular - Building with SystemJS</h1>

    <p>We document the main steps required when using SystemJS and SystemJS-Builder below, but please refer to
        <a href="https://github.com/ceolter/ag-grid-ng2-example">ag-grid-ng2-example</a> on GitHub for a full working example of this.</p>

    <h3>For Just in Time (JIT) Compilation</h3>
    <p>
        You will need to configure SystemJS for ag-grid and ag-grid-component as follows:
    </p>

    <pre>
System.config({
    map: {
        lib: 'lib',
        // angular bundles
        '@angular/core': 'node_modules/@angular/core/bundles/core.umd.js',
        '@angular/common': 'node_modules/@angular/common/bundles/common.umd.js',
        '@angular/compiler': 'node_modules/@angular/compiler/bundles/compiler.umd.js',
        '@angular/platform-browser': 'node_modules/@angular/platform-browser/bundles/platform-browser.umd.js',
        '@angular/platform-browser-dynamic': 'node_modules/@angular/platform-browser-dynamic/bundles/platform-browser-dynamic.umd.js',
        '@angular/http': 'node_modules/@angular/http/bundles/http.umd.js',
        '@angular/router': 'node_modules/@angular/router/bundles/router.umd.js',
        '@angular/forms': 'node_modules/@angular/forms/bundles/forms.umd.js',
        // other libraries
        'rxjs': 'node_modules/rxjs',
        'angular-in-memory-web-api': 'npm:angular-in-memory-web-api/bundles/in-memory-web-api.umd.js',
        // ag libraries
        'ag-grid-ng2' : 'node_modules/ag-grid-ng2',
        'ag-grid' : 'node_modules/ag-grid',
        'ag-grid-enterprise' : 'node_modules/ag-grid-enterprise'
    },
    packages: {
        'ag-grid-ng2': {
            defaultExtension: "js"
        },
        'ag-grid': {
            defaultExtension: "js"
        },
        'ag-grid-enterprise': {
            defaultExtension: "js"
        }
        ...other packages
    }
}</pre>

    <h3 id="aotCompilation">For Ahead-of-Time (AOT) Compilation</h3>
    <p>
        We'll use SystemJS Builder for rollup.
    </p>

    <pre><span class="codeComment">// gulpfile</span>
var gulp = require('gulp');
var SystemBuilder = require('systemjs-builder');

gulp.task('aot-bundle', function () {
    var builder = new SystemBuilder();

    builder.loadConfig('./aot/systemjs.config.js')
        .then(function () {
            return builder.buildStatic('aot/app/boot-aot.js', './aot/dist/bundle.js', {
                encodeNames: false,
                mangle: false,
                minify: true,
                rollup: true,
                sourceMaps: true
            });
        })
});</pre>

    <pre><span class="codeComment">// aot systemjs config</span>
System.config({
        defaultJSExtensions: true,
        map: {
            // angular bundles
            '@angular/core': 'node_modules/@angular/core',
            '@angular/common': 'node_modules/@angular/common',
            '@angular/compiler': 'node_modules/@angular/compiler/index.js',
            '@angular/platform-browser': 'node_modules/@angular/platform-browser',
            '@angular/forms': 'node_modules/@angular/forms',
            '@angular/router': 'node_modules/@angular/router',
            // other libraries
            'rxjs': 'node_modules/rxjs',
            // 'angular-in-memory-web-api': 'npm:angular-in-memory-web-api/bundles/in-memory-web-api.umd.js',
            // ag libraries
            'ag-grid-ng2' : 'node_modules/ag-grid-ng2',
            'ag-grid' : 'node_modules/ag-grid',
            'ag-grid-enterprise' : 'node_modules/ag-grid-enterprise'
        },
        packages: {
            '@angular/core': {
                main: 'index.js'
            },
            '@angular/common': {
                main: 'index.js'
            },
            '@angular/platform-browser': {
                main: 'index.js'
            },
            '@angular/forms': {
                main: 'index.js'
            },
            '@angular/router': {
                main: 'index.js'
            }
        }
    }
);
</pre>

    <p>
        All the above items are specific to either Angular, SystemJS or SystemJS Builder. The above is intended to point
        you in the right direction. If you need more information on this, please see the documentation
        for those projects.
    </p>

</div>

<?php include '../documentation-main/documentation_footer.php'; ?>
