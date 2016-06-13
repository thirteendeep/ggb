<div gr-grid="container">
    <div gr-grid="row">
        <div gr-grid="sm-10"></div>
        <div gr-grid="sm-2"></div>
    </div>
    <?php
    $col = 2;
    for ($i=1; $i <= 4; $i++) {
        ?>
        <div gr-grid="row">
            <div gr-grid="sm-10"></div>
            <div gr-grid="sm-<?=$col;?> sm-pull-<?=$i;?>"></div>
        </div>
        <?php
    } ?>
</div>
<div class="container-mixin">
    <div class="row-mixin">
        <div class="pull-mixin"></div>
        <div class="pull-mixin"></div>
    </div>
</div>
