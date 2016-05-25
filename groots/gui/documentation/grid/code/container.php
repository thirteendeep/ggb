<?php
ob_start();
?>
<div gr-grid="container">
    <div gr-grid="row">
        <div gr-grid="md-6 lg-2">
            <!-- content -->
        </div>
        <div gr-grid="md-6 lg-10">
            <!-- content -->
        </div>
    </div>
</div>

.container-mixin {
    @include container;
}
<?php echo codeBlock(ob_get_clean()); ?>
<a class="btn--primary btn--small" href="#" gr-toggle-demo>Show demo</a>
