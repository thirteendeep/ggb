<?php
ob_start();
?>
<div gr-grid="container">
    <div gr-grid="row">
        <div gr-grid="sm-10">
            <!-- content -->
        </div>
        <div gr-grid="sm-2 sm-pull-2">
            <!-- content -->
        </div>
    </div>
</div>

.pull-mixin {
    &:first-of-type {
        @include col(sm, 10);
    }
    &:last-of-type {
        @include col(sm, 2);
        @include pull(sm, 1);
    }
}
<?php echo codeBlock(ob_get_clean()); ?>
<a class="btn--primary btn--small" href="#" gr-toggle-demo>Show demo</a>
