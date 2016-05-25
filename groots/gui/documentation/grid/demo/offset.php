<div gr-grid="container">
    <?php
    $col = 2;
    for ($i=10; $i >= 7; $i--) {
        ?>
        <div gr-grid="row">
            <div gr-grid="sm-<?=$col;?> sm-offset-<?=$i;?>"></div>
        </div>
        <?php
        $col++;
    } ?>
</div>
<div class="container-mixin">
    <div class="row-mixin">
        <div class="offset-mixin"></div>
    </div>
</div>
