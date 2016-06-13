<?php
$page = "Styleguide";
include $_SERVER['DOCUMENT_ROOT'].'/gui/includes/gui-head.php'; ?>
<section class="gui-banner">
    <div class="gui-banner__inner">
        <p>A Styleguide is the primary visual DNA of your company’s branding.</p>
        <p>It is used to create a cohesive look across all web-based channels.</p>
    </div>
</section><!-- @end gui-info -->

<main class="gui-main">

    <!--Logo-->
    <div class="gui-item__header">Logo</div>
    <div class="gui-item__showcase gui-logo-container" gr-grid="container">
    </div>

    <!--Colors-->
    <div class="gui-item__header">Colors</div>
    <div class="gui-item__showcase" gr-grid="container">
        <?php include 'styleguide/colors.php' ?>
    </div>

    <!--Fonts-->
    <div class="gui-item__header">Fonts</div>
    <div class="gui-item__showcase" gr-grid="container">
        <?php include 'styleguide/fonts.php' ?>
    </div>

    <!--Typography-->
    <div class="gui-item__header">Typography</div>
    <div class="gui-item__showcase" gr-grid="container">
        <?php include 'styleguide/content.php' ?>
    </div>

    <!--Forms-->
    <div class="gui-item__header">Forms</div>
    <div class="gui-item__showcase" gr-grid="container">
        <?php include 'styleguide/forms.php' ?>
    </div>

    <!--User Interface-->
    <div class="gui-item__header">User Interface</div>
    <div class="gui-item__showcase" gr-grid="container">
        <div gr-grid="row--block md-2">
            <div gr-grid="block">
                <div class="gui-item__subtitle">Buttons</div>
                <?php include 'styleguide/buttons.php' ?>
            </div>
            <div gr-grid="block">
                <div class="gui-item__subtitle">Icons</div>
            </div>
            <div gr-grid="block">
                <div class="gui-item__subtitle">Socials</div>
                <?php include 'styleguide/socials.php' ?>
            </div>
            <div gr-grid="block">
                <div class="gui-item__subtitle">Sharing</div>
                <?php include 'styleguide/sharing.php' ?>
            </div>
            <div gr-grid="block">
                <div class="gui-item__subtitle">Pagination</div>
                <?php include 'styleguide/pagination.php' ?>
            </div>
            <!--Breadcrumb-->
            <div gr-grid="block">
                <div class="gui-item__subtitle">Breadcrumb</div>
                <?php include 'styleguide/breadcrumb.php' ?>
            </div>
            <!--Table-->
            <div gr-grid="block">
                <div class="gui-item__subtitle">Table</div>
                <?php include 'styleguide/table.php' ?>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/gui-footer.php' ?>
