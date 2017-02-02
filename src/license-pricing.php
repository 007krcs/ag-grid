<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <title>ag-Grid License and Pricing</title>
    <meta name="description" content="License and Pricing details for ag-Grid">
    <meta name="keywords" content="ag-Grid Javascript Grid License and Pricing"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="/style.css">

    <link rel="shortcut icon" href="https://www.ag-grid.com/favicon.ico"/>
    <!-- Hotjar Tracking Code for https://www.ag-grid.com/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:372643,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
</head>

<body ng-app="index" class="big-text">

<?php $navKey = "licenseAndPricing";
include 'includes/navbar.php'; ?>

<?php $headerTitle = "License and Pricing for ag-Grid Enterprise";
include 'includes/headerRow.php'; ?>

<div class="container info-page">

    <style>
        .theTable {
            text-align: center;
        }

        .tableCell {
            width: 48%;
            border-left: 1px solid #888;
            border-right: 1px solid #888;
            padding: 10px;
        }

        .tableHighlightCell {
            border-top: 1px solid #888;
            border-bottom: 1px solid #888;
            background-color: #eee;
        }

        .gapCol {
            width: 4%;
        }

        .titleCell {
            font-family: Impact, Charcoal, sans-serif;
            font-size: 35px;
            background-color: #eee;
            border-top: 1px solid #888;
            border-bottom: 1px solid #888;
        }

        .gridFeature {
            padding: 4px;
        }

        .gridFeaturesTitle {
            /*background-color: #eee;*/
            font-weight: bold;
        }

        .gridFeaturePlus {
            font-weight: bold;
        }

        .gridFeaturesList {
            /*background-color: #eee;*/
        }

        .benefitsCell {
            border-bottom: 1px solid #888;
        }
    </style>

    <div id="thankyou">
        <div class="row" style="margin-top: 20px; margin-bottom: 0">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        Thank you for contacting ag-Grid. We'll be in contact shortly.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h2>
                Which License should you choose?
            </h2>

            <p style="margin-top: 20px;">
                ag-Grid Enterprise is our commercial product that is designed for Enterprise development teams. This page covers the licenses available. For ag-Grid Free, click <a href="/javascript-grid-getting-started/"> here.</a>
            </p>
            
            <p>   
                To pick the correct license, answer these simple questions:
            </p>
            <p>   
                <b>Are you using ag-Grid Enterprise in one application? </b>
            </p>
            <p>   
                If it's a single application, an Application License is correct otherwise a Site License is best.
            </p>
            <p>   
                <b>Is your application for an internal or external end-user?</b>
            </p>
            <p>
                If external, then you also need SaaS or OEM licensing.
            </p>

            <p>   
                <b>What's Included?</b>
            </p>
            <p>
                ag-Grid Enterprise licenses are perpetual and include one year of support, maintenance and upgrades.
            </p>

        </div>
        <div class="col-md-3 col-md-offset-1">
            
            <h2>Got a question?</h2>
            
            <div class="pricing-question">
                <a href="mailto:accounts@ag-grid.com?Subject=ag-Grid%20Enquiry" class="btn large red">Contact Us</a>
            </div>
            
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <h2 class="text-center">
                Select the best license for your Application:
            </h2>

            <div class="row pricing-row">
                <div class="col-md-4">
                    <div class="pricing-plan">
                        <div class="pricing-plan-top">
                            <h4>Application Developer</h4>
                            <div>
                                <span class="price">&pound;495</span>
                                <span class="price-sub">per Developer</span>
                            </div>
                            <div class="extra">
                                <p>Released under <a href="https://github.com/ceolter/ag-grid-enterprise/blob/master/LICENSE.md">Commercial License</a></p>
                            </div>
                            <ul>
                                <li><span>Usage of ag-Grid Enterprise in a single Application</span></li>
                            </ul>
                        </div>
                        <a class="btn large red" data-product-type="single-developer" href="#" data-toggle="modal" data-target=".orderForm-applicationDeveloper">Enquire</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="recommend-badge">Recommended</div>
                    <div class="pricing-plan red">
                        <div class="pricing-plan-top">
                            <h4>Site Developer</span></h4>
                            <div>
                                <span class="price">&pound;795</span>
                                <span class="price-sub">per Developer</span>
                            </div>
                            <div class="extra">
                                <p>Released under <a href="https://github.com/ceolter/ag-grid-enterprise/blob/master/LICENSE.md">Commercial License</a></p>
                            </div>
                            <ul>
                                <li><span>Usage of ag-Grid Enterprise in multiple Applications</span></li>
                            </ul>
                        </div>
                        <a class="btn large red" data-product-type="single-developer" href="#" data-toggle="modal" data-target=".orderForm-siteDeveloper">Enquire</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pricing-plan">
                        <div class="pricing-plan-top">
                            <h4>SaaS and OEM</h4>
                            <div>
                                <span class="price">POA</span>
                                <span class="price-sub">price on asking</span>
                            </div>
                            <div class="extra">
                                <p>Released under <a href="https://github.com/ceolter/ag-grid-enterprise/blob/master/LICENSE.md">Commercial License</a></p>
                            </div>
                            <ul>
                                <li><span>Usage of ag-Grid Enterprise in SaaS/OEM Applications</span></li>
                            </ul>
                        </div>
                        <a class="btn large red" data-product-type="single-developer" href="#" data-toggle="modal" data-target=".orderForm-saasAndOEM">Enquire</a>
                    </div>
                </div> 



            </div>

        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Testimonials from our Customers</h2>
        </div>
    </div>
</div>

<?php include 'home/testimonials-2.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php include("includes/commonQuestions.php"); ?>
        </div>
<!--         <div class="col-md-6">
            <h2>Our Customers</h2>
            <?php include("includes/customerLogos.php"); ?>
        </div> -->
    </div>
</div>

<!-- The Order Form Modal -->
<div class="modal fade orderForm-applicationDeveloper" tabindex="-1" role="dialog" aria-labelledby="orderFormLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Order Enquiry</h4>
        </div>
        <div class="modal-body">
            <?php 
            $formKey = "applicationDeveloper";
            include("includes/orderForm.php"); ?>
        </div>
    </div>
  </div>
</div>

<!-- The Order Form Modal -->
<div class="modal fade orderForm-siteDeveloper" tabindex="-1" role="dialog" aria-labelledby="orderFormLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Order Enquiry</h4>
        </div>
        <div class="modal-body">
            <?php 
            $formKey = "siteDeveloper";
            include("includes/orderForm.php"); ?>
        </div>
    </div>
  </div>
</div>

<!-- The Order Form Modal -->
<div class="modal fade orderForm-saasAndOEM" tabindex="-1" role="dialog" aria-labelledby="orderFormLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Order Enquiry</h4>
        </div>
        <div class="modal-body">
            <?php 
            $formKey = "saasAndOEM";
            include("includes/orderForm.php"); ?>
        </div>
    </div>
  </div>
</div>


<?php include("includes/footer.php"); ?>

<script>
if(window.location.href.indexOf("/license-pricing.php?submitted=true") !=-1)
{
(new Image()).src="//www.googleadservices.com/pagead/conversion/873243008/?label=8TOnCM7BnWsQgMOyoAM&guid=ON&script=0";
}
</script>

</body>

<?php include_once("includes/analytics.php"); ?>

</html>