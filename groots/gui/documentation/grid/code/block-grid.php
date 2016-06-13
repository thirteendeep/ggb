<?php
ob_start();
?>
<div block-gr-grid="sm-2 lg-4">
    <div block-gr-grid="block">
        <!-- content -->
    </div>
    <div block-gr-grid="block">
        <!-- content -->
    </div>
    <div block-gr-grid="block">
        <!-- content -->
    </div>
</div>

.block-grid {
    @include block-grid(sm, 2);
    @include block-grid(lg, 4);

    > div  {
        @include block;
    }
}
<?php echo codeBlock(ob_get_clean()); ?>
<a class="btn--primary btn--small" href="#" gr-toggle-demo>Show demo</a>
