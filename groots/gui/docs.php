<?php
function codeBlock($buffer){
    $str = explode("\n",$buffer);
    $indent = strlen($str[0])-strlen(ltrim($str[0]));
    foreach($str as $k=>$v){
        $subindent = strlen($v)-strlen(ltrim($v));
        $str[$k] = substr($v,min($indent,$subindent));
    }
    return '<pre><code>'.htmlentities(implode($str,"\n")).'</code></pre>';
}

$page = "Documentation";
include 'includes/gui-head.php'; ?>

<section class="gui-banner">
    <div class="gui-banner__inner">
        <p>[docs intro]</p>
    </div>
</section><!-- @end gui__banner -->

<aside class="gui-doc-scrollspy">
    <ul>
        <li><a class="gui-doc-scrollspy__title" href="#d-build" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Build system</a> </li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-build-gettingStarted" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Getting started</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-build-configurations" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Configurations</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-build-notifications" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Notifications</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-build-bundleTasks" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Bundle tasks</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-build-watch" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Watch and livereload</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-build-singleTasks" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Single tasks</a></li>
        <li><a class="gui-doc-scrollspy__title" href="#d-components" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Components</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-navigation" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Navigation</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-buttons" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Buttons</a> </li>
        <li><a class="gui-doc-scrollspy__title" href="#d-grid" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Grid</a> </li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-grid-gettingStarted" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Getting started</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-grid-container" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Container</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-grid-fluidContainer" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Fluid container</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-grid-rowOptions" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="1">Row</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-grid-collapse" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Collapse / Uncollapse</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-grid-offset" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Offset</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-grid-pull" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Pull</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-grid-push" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Push</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-grid-blockGrid" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="1">Block grid</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#d-blockGridCollapse" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="1">Block grid - collapse</a></li>
    </ul>
</aside>

<main class="gui-main">
    <section gr-grid="container--fluid">
        <?php /*BUILD*/ ?>
        <h2 id="d-build" class="gui-doc__header" gr-scrollspy-chapter gr-grid="row">Build system</h2>

        <div id="d-build-gettingStarted" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/build/introduction.php'); ?>
            </div>
        </div>
        <div id="d-build-configurations" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/build/configurations.php'); ?>
            </div>
        </div>
        <div id="d-build-notifications" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/build/notifications.php'); ?>
            </div>
        </div>
        <div id="d-build-bundleTasks" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/build/bundle-tasks.php'); ?>
            </div>
        </div>
        <div id="d-build-watch" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/build/watch.php'); ?>
            </div>
        </div>
        <div id="d-build-singleTasks" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/build/single-tasks.php'); ?>
            </div>
        </div>

        <?php /*COMPONENTS*/ ?>
        <h2 id="d-components" class="gui-doc__header" gr-scrollspy-chapter gr-grid="row">Components</h2>

        <?php //NAVIGATION ?>
        <div id="d-navigation" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/components/navigation.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('documentation/components/code/navigation.php'); ?>
            </div>
        </div>
        <?php //BUTTONS ?>
        <div id="d-buttons" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/components/buttons.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('documentation/components/code/buttons.php'); ?>
            </div>
        </div>

        <?php //ADD NEW COMPONENT HERE ?>

        <?php /*GRID*/ ?>
        <h2 id="d-grid" class="gui-doc__header" gr-scrollspy-chapter gr-grid="row">Grid</h2>

        <?php //GRID GETTING STARTED ?>
        <div id="d-grid-gettingStarted" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/grid/getting-started.php'); ?>
            </div>
        </div>
        <?php //CONTAINER ?>
        <div id="d-grid-container" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/grid/container.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('documentation/grid/code/container.php'); ?>
            </div>
            <div class="gui-doc__showcase" gr-grid-doc="true">
                <?php include('documentation/grid/demo/container.php'); ?>
            </div>
        </div>
        <?php //FLUID CONTAINER ?>
        <div id="d-grid-fluidContainer" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/grid/container-fluid.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('documentation/grid/code/container-fluid.php'); ?>
            </div>
            <div class="gui-doc__showcase" gr-grid-doc="true">
                <?php include('documentation/grid/demo/container-fluid.php'); ?>
            </div>
        </div>
        <?php //ROW ?>
        <div id="d-grid-rowOptions" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/grid/row.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('documentation/grid/code/row.php'); ?>
            </div>
            <div class="gui-doc__showcase" gr-grid-doc="true">
                <?php include('documentation/grid/demo/row.php'); ?>
            </div>
        </div>
        <?php //COLLAPSE / UNCOLLAPSE ?>
        <div id="d-grid-collapse" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/grid/collapse.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('documentation/grid/code/collapse.php'); ?>
            </div>
            <div class="gui-doc__showcase" gr-grid-doc="true">
                <?php include('documentation/grid/demo/collapse.php'); ?>
            </div>
        </div>
        <?php //OFFSET ?>
        <div id="d-grid-offset" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/grid/offset.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('documentation/grid/code/offset.php'); ?>
            </div>
            <div class="gui-doc__showcase" gr-grid-doc="true">
                <?php include('documentation/grid/demo/offset.php'); ?>
            </div>
        </div>
        <?php //PULL ?>
        <div id="d-grid-pull" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/grid/pull.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('documentation/grid/code/pull.php'); ?>
            </div>
            <div class="gui-doc__showcase" gr-grid-doc="true">
                <?php include('documentation/grid/demo/pull.php'); ?>
            </div>
        </div>
        <?php //PUSH ?>
        <div id="d-grid-push" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/grid/push.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('documentation/grid/code/push.php'); ?>
            </div>
            <div class="gui-doc__showcase" gr-grid-doc="true">
                <?php include('documentation/grid/demo/push.php'); ?>
            </div>
        </div>
        <?php //BLOCK GRID ?>
        <div id="d-grid-blockGrid" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/grid/block-grid.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('documentation/grid/code/block-grid.php'); ?>
            </div>
            <div class="gui-doc__showcase" gr-grid-doc="true">
                <?php include('documentation/grid/demo/block-grid.php'); ?>
            </div>
        </div>
        <?php //BLOCK GRID - COLLAPSE ?>
        <div id="d-grid-blockGridCollapse" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('documentation/grid/block-grid-collapse.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('documentation/grid/code/block-grid-collapse.php'); ?>
            </div>
            <div class="gui-doc__showcase" gr-grid-doc="true">
                <?php include('documentation/grid/demo/block-grid-collapse.php'); ?>
            </div>
        </div>
        <?php //ADD NEW HERE ?>

    </section>
</main>

<?php include 'includes/gui-footer.php' ?>
