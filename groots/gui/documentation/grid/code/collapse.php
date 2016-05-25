<?php
ob_start();
?>
<div gr-grid="container">
    <div gr-grid="row sm-collapse lg-uncollapse">
        <div gr-grid="md-6 lg-2">
            <!-- content -->
        </div>
        <div gr-grid="md-6 lg-10">
            <!-- content -->
        </div>
    </div>
</div>

.row-mixin--collpase {
    @include collapse(sm, '.collapse-mixin');
    @include uncollapse(lg, '.collapse-mixin');
}
<?php echo codeBlock(ob_get_clean()); ?>
<a class="btn--primary btn--small" href="#" gr-toggle-demo>Show demo</a>
