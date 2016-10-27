<?php

$pageTitle = "JavaScript DataGrid";
$pageDescription = "Guidelines on how to choose a JavaScript datagrid.";
$pageKeyboards = "Choosing JavaScript DataGrid";

include('../includes/mediaHeader.php');
?>

<div class="row">
    <div class="col-md-12" style="padding-top: 20px; padding-bottom: 20px;">
        <h2>Choosing a JavaScript DataGrid</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-9">

        <p>
            Now that we have done many conferences, we clearly understand why our users choose ag-Grid over the competition.
            This article explains the main reasons why ag-Grid is becoming the leading JavaScript datagrid.
        </p>

        <h2>1. The 'ag' in ag-Grid stands for AGnostic</h2>

        <p>
            ag-Grid has zero dependencies such as Angular or React,
            we don't even use JQuery, Underscore or LoDash. The foundations of ag-Grid is a custom made framework 
            designed specifically for ag-Grid. Having no dependency means
            ag-Grid will work with any framework - we call this framework agnostic.
        </p>

        <p>
            Being framework agnostic allows you to choose your framework and datagrid separately. It also reduces the work
            required when you move frameworks (e.g. moving from Angular 1 to Angular 2, or React to Aurelia etc.).
        </p>

        <p>
            If you choose a datagrid that is not framework agnostic (e.g. written using Angular 2) then you have locked
            into that framework. If you select a datagrid you should not be locked into a framework.
        </p>

        <p>We are not aware of any other datagrid that is agnostic like ag-Grid.</p>

        <h2>2. Enterprise Foundations</h2>

        <p>
            The authors of ag-Grid come with years of delivering reporting and data warehousing solutions to
            investment banks and telecommunications companies. The authors of ag-Grid are not traditional web
            developers, our skills are not creating shopping carts or online social media websites. We understand
            data and how to best manage it.
        </p>

        <p>
            Pretty much all other JavaScript datagrids start off solving a particular problem (e.g. filters and sorting,
            or a pivot table) but then fail to scale. The designs are not extensible to the complex requirements of a datagrid.
        </p>

        <p>
            ag-Grid's solid design allows it to manage a) the core features of a datagrid and b) items which
            do not exist in other grids e.g. pivoting. ag-Grid does the standard features better and then
            takes if further with advanced features not seen in other datagrids.
        </p>

        <p>We are not aware of any other datagrid that manages complexity like ag-Grid.</p>

        <h2>3. Integrating, not Wrapping</h2>

        <p>
            ag-Grid integrates with frameworks such as Angular and React. That means ag-Grid is not only available
            as a React or Angular 1 / 2 component, it also allows you to use React and Angular 1 / 2 inside
            ag-Grid for custom cell rendering.
        </p>

        <p>We are not aware of any other grid component that allows you to select from any of these frameworks inside the grid while staying agnostic.</p>

        <h2>4. Features Above and Beyond</h2>

        <p>
            ag-Grid gives for free what other grids are charging for. There is no reason to
            buy another datagrid. The enterprise version of ag-Grid contains features that go above and beyond other
            datagrids on the market.
        </p>

        <p>We are not aware of any other grid that provides the same level of enterprise features as ag-Grid.</p>

        <h2>5. Open Source</h2>

        <p>
            Both ag-Grid and ag-Grid-Enterprise are open source - ag-Grid is free, ag-Grid Enterprise requires
            a license. Both sets of code are available on Github where you can see the code and raise
            issues and pull requests. The open source nature allows the community to advise the ag-Grid
            team and act as code reviewers. A closed source project does not have the same
            community support.
        </p>

        <p>We are not aware of any other commercial datagrid that offers its code as open source on Github.</p>

        <h2>6. Free and Commercial</h2>

        <p>
            ag-Grid has both free and commercial versions. This allows everyone to benefit from ag-Grid
            even if their budget is limited. The commercial version funds the growth of the project.
            This guarantees the ag-Grid project will continue while
            also providing the best standard JavaScript datagrid for free.
        </p>

        <h2>7. Open Source is Risky</h2>

        <p>
            Purely open source projects come with no support or warranty. They also run a greater risk
            of discontinuing as the developers find other ways to spend their free time. If you are using
            an open source datagrid that is not owned by a recognised company, it runs the risk of losing
            developer support and becoming stale and unsupported.
        </p>

        <p>ag-Grid has an office, revenue and employees. Keeping ag-Grid alive is our job.</p>

        <h2>8. You Aint' Seen Nothing Yet</h2>

        <p>
            ag-Grid is new on the market. We have already surpassed all the competition. This is just the start.
            In the coming months and years you can expect ag-Grid to march
            forward an go to places no JavaScript datagrid has gone before
            - all while the other datagrids struggle to catch up.
        </p>

        <div style="margin-top: 20px;">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://www.ag-grid.com/ag-grid-angular-connect-2016/"
               data-text="We're Gonna Need a Bigger Boat - ag-Grid Sponsors Angular Connect 2016" data-via="ceolter" data-size="large">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>

    </div>
    <div class="col-md-3">

        <img src="../images/ag-Grid2-200.png" style="display: inline-block; padding-bottom: 20px;"/>

        <div>
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://www.ag-grid.com/ag-grid-angular-connect-2016/"
               data-text="We're Gonna Need a Bigger Boat - ag-Grid Sponsors Angular Connect 2016" data-via="ceolter" data-size="large">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>

        <div style="font-size: 14px; background-color: #dddddd; padding: 15px;">

            <p>
                <img src="/niall.png"/>
            </p>
            <p>
                About Me
            </p>
            <p>
                I started writing software on the Commodore 64 and haven't stopped.
                My earlier professional career was with assembly, C++ and MFC,
                then later moving onto full stack Java / JSP / GWT and now focusing
                on front end Javascript.
            </p>
            <p>
                Founder, Technical Lead and CEO of ag-Grid LTD.
            </p>

            <div>
                <br/>
                <a href="http://uk.linkedin.com/in/niallcrosby"><img src="/images/linked-in.png"/></a>
                <br/>
                <br/>
                <a href="https://twitter.com/ceolter" class="twitter-follow-button" data-show-count="false" data-size="large">@ceolter</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>

        </div>

    </div>
</div>


<hr/>

<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'aggrid';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
<hr/>

<footer class="license">
    © ag-Grid Ltd 2015-2016
</footer>

<?php
include('../includes/mediaFooter.php');
?>
