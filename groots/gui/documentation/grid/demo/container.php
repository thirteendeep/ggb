<div gr-grid="container">
    <div gr-grid="row">
        <div gr-grid="sm-3"></div>
        <div gr-grid="sm-3"></div>
        <div gr-grid="sm-3"></div>
        <div gr-grid="sm-3"></div>
    </div>
    <div gr-grid="row">
        <div gr-grid="md-6 lg-2"></div>
        <div gr-grid="md-6 lg-10"></div>
    </div>
    <div gr-grid="row">
        <div gr-grid="md-2 lg-6"></div>
        <div gr-grid="md-10 lg-6"></div>
    </div>
    <div gr-grid="row">
        <div gr-grid="lg-4"></div>
        <div gr-grid="lg-4"></div>
        <div gr-grid="lg-4"></div>
    </div>
    <div gr-grid="row">
        <div gr-grid="column"></div>
    </div>
</div>
<div class="container-mixin">
    <div class="row-mixin">
        <?php
        for ($i=1; $i <= 5; $i++) {
            ?>
            <div class="n-of-n"></div>
            <?php
        } ?>
    </div>
</div>
