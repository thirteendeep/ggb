<div gr-grid="container">
    <?php
    $col = 9;
    for ($i=1; $i <= 3; $i++) {
        ?>
        <div gr-grid="row">
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-<?=$col;?> sm-push-<?=$i;?>"></div>
        </div>
        <?php
        $col--;
    } ?>
</div>
<div class="container-mixin">
    <div class="row-mixin">
        <div class="push-mixin">
            &nbsp;
        </div>
        <div class="push-mixin">
            &nbsp;
        </div>
    </div>
</div>
