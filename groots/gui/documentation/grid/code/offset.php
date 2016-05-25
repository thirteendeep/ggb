<?php
ob_start();
?>
<div gr-grid="container">
    <div gr-grid="row">
        <div gr-grid="sm-2 sm-offset-10">
            <!-- content -->
        </div>
    </div>
</div>

.offset-mixin {
    @include col(sm, 10);
    @include offset(md, 2);
}
<?php echo codeBlock(ob_get_clean()); ?>
<a class="btn--primary btn--small" href="#" gr-toggle-demo>Show demo</a>
