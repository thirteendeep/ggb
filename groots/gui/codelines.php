<?php
$page = "Codelines";
include 'includes/gui-head.php'; ?>

<section class="gui-banner">
    <div class="gui-banner__inner">
        <p><strong>Why should you comply to some codelines?</strong></p>
        <p>Because you should be writing code as if the next developer working on your code is a serial-killer and knows where you lives!</p>
    </div>
</section><!-- @end gui__banner -->

<aside class="gui-doc-scrollspy">
    <ul>
        <li><a class="gui-doc-scrollspy__title" href="#c-css" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">CSS</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-terms" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Terms</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-cssFormatting" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Formatting</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-cssIdSelectors" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">ID Selectors</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-shorthandProp" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Shorthand properties</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-important" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">!important</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-stateRules" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">State rules</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-cssComments" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Comments</a></li>
        <li><a class="gui-doc-scrollspy__title" href="#c-scss" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">SCSS</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-scssFormatting" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Formatting</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-nestedSelectors" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Nested Selectors</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-scssVariables" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Variables</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-scssComments" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="0">Comments</a></li>
        <li><a class="gui-doc-scrollspy__title" href="#c-js" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="1">JS / jQuery</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-jsIdSelectors" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="1">ID Selectors</a></li>
        <li><a class="gui-doc-scrollspy__subtitle" href="#c-jsVariables" gr-scroll-to=".gui-nav" gr-scroll-to-bottom="1">Variables</a></li>
    </ul>
</aside>

<main class="gui-main">
    <section gr-grid="container--fluid">
        <?php /*CSS*/ ?>
        <h2 id="c-css" class="gui-doc__header" gr-scrollspy-chapter gr-grid="row">CSS</h2>

        <?php //TERMS ?>
        <div id="c-terms" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/css/terms.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('codelines/css/code/terms.php'); ?>
            </div>
        </div>
        <?php //CSS FORMATING ?>
        <div id="c-cssFormatting" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/css/formatting.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('codelines/css/code/formatting.php'); ?>
            </div>
        </div>
        <?php //ID SELECTORS ?>
        <div id="c-cssIdSelectors" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/css/id-selectors.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('codelines/css/code/id-selectors.php'); ?>
            </div>
        </div>
        <?php //SHORTHAND PROPERTIES ?>
        <div id="c-shorthandProp" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/css/shorthand-properties.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('codelines/css/code/shorthand-properties.php'); ?>
            </div>
        </div>
        <?php //!IMPORTANT ?>
        <div id="c-important" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/css/important.php'); ?>
            </div>
            <div class="gui-doc__markup">
                <?php include('codelines/css/code/important.php'); ?>
            </div>
        </div>
        <?php //ACTION CLASSES ?>
        <div id="c-stateRules" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/css/state-rules.php'); ?>
            </div>
            <div class="gui-doc__markup">
               <?php include('codelines/css/code/state-rules.php'); ?>
            </div>
        </div>
        <?php //CSS COMMENTS ?>
        <div id="c-cssComments" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/css/comments.php'); ?>
            </div>
            <div class="gui-doc__markup">
               <?php include('codelines/css/code/comments.php'); ?>
            </div>
        </div>
        <?php //ADD NEW HERE ?>

        <?php /*SCSS*/ ?>
        <h2 id="c-css" class="gui-doc__header" gr-scrollspy-chapter gr-grid="row">SCSS</h2>

        <?php //FORMATTING ?>
        <div id="c-scssFormatting" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/scss/formatting.php'); ?>
            </div>
            <div class="gui-doc__markup">
               <?php include('codelines/scss/code/formatting.php'); ?>
            </div>
        </div>
        <?php //NESTED SELECTORS ?>
        <div id="c-nestedSelectors" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/scss/nested-selectors.php'); ?>
            </div>
            <div class="gui-doc__markup">
               <?php include('codelines/scss/code/nested-selectors.php'); ?>
            </div>
        </div>
        <?php //VARIABLES ?>
        <div id="c-scssVariables" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/scss/variables.php'); ?>
            </div>
            <div class="gui-doc__markup">
               <?php include('codelines/scss/code/variables.php'); ?>
            </div>
        </div>
        <?php //SCSS COMMENTS ?>
        <div id="c-scssComments" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/scss/comments.php'); ?>
            </div>
            <div class="gui-doc__markup">
               <?php include('codelines/scss/code/comments.php'); ?>
            </div>
        </div>
        <?php //ADD NEW HERE ?>

        <?php /*JS / JQUERY*/ ?>
        <h2 id="c-css" class="gui-doc__header" gr-scrollspy-chapter gr-grid="row">JS / jQuery</h2>

        <?php //ID SELECTORS ?>
        <div id="c-jsIdSelectors" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/js/id-selectors.php'); ?>
            </div>
            <div class="gui-doc__markup">
               <?php include('codelines/js/code/id-selectors.php'); ?>
            </div>
        </div>
        <?php //VARIABLES ?>
        <div id="c-jsVariables" class="gui-doc" gr-scrollspy-chapter gr-grid="row">
            <div class="gui-doc__litteral">
                <?php include('codelines/js/variables.php'); ?>
            </div>
            <div class="gui-doc__markup">
               <?php include('codelines/js/code/variables.php'); ?>
            </div>
        </div>
        <?php //ADD NEW HERE ?>

    </section>
</main>

<?php include 'includes/gui-footer.php'; ?>
