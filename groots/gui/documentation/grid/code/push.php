<?php
ob_start();
?>
<div gr-grid="container">
    <div gr-grid="row">
        <div gr-grid="sm-2">
            <!-- content -->
        </div>
        <div gr-grid="sm-8 sm-push-2">
            <!-- content -->
        </div>
    </div>
</div>

.push-mixin {
    &:first-of-type {
        @include col(sm, 2);
    }
    &:last-of-type {
        @include col(sm, 8);
        @include push(sm, 2);
    }
}
<?php echo codeBlock(ob_get_clean()); ?>
<a class="btn--primary btn--small" href="#" gr-toggle-demo>Show demo</a>
