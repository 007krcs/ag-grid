<?php
$navKey = "blog";
$version = 'latest';
require_once dirname(__FILE__) . '/html-helpers.php';
require_once dirname(__FILE__) . '/../example-runner/utils.php';
gtm_data_layer('blogs');
?>
<!DOCTYPE html>
<html>
<head lang="en">
<?php
meta_and_links($pageTitle, $pageKeyboards, $pageDescription, false);
?>
<link rel="stylesheet" href="../dist/homepage.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body ng-app="documentation">

<header id="nav" class="compact">
<?php 
    include dirname(__FILE__) . '/navbar.php';
?>
</header>

<div class="info-page">
    <div class="row">
        <section class="blog-section">