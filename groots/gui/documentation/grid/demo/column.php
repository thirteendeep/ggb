<div gr-grid="container">
    <div>
        <div gr-grid="row">
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-3"></div>
        </div>

        <div gr-grid="row reverse">
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-3"></div>
        </div>

        <div gr-grid="row sm-start">
            <div gr-grid="sm-2 lg-auto"></div>
            <div gr-grid="sm-2 lg-auto"></div>
            <div gr-grid="sm-2 lg-auto"></div>
        </div>


        <div gr-grid="row sm-start lg-end">
            <?php
            for ($i=1; $i <= 6; $i++) {
                ?>
                <div gr-grid="sm-3"></div>
                <?php
            } ?>
        </div>

        <div gr-grid="row lg-between">
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-3"></div>
            <div gr-grid="sm-2"></div>
        </div>
        <div gr-grid="row lg-around">
            <?php
            for ($i=1; $i <= 3; $i++) {
                ?>
                <div gr-grid="sm-2"></div>
                <?php
            } ?>
            <div gr-grid="sm-3"></div>
        </div>
        <div class="col-large" gr-grid="row sm-top md-middle lg-top">
            <?php
            for ($i=1; $i <= 3; $i++) {
                ?>
                <div gr-grid="sm-2"></div>
                <?php
            } ?>
            <div gr-grid="sm-6 sm-middle md-end"></div>
        </div>

        <div gr-grid="row row--order">
            <div gr-grid="sm-4"></div>
            <div gr-grid="sm-4 md-first lg-last"></div>
            <div gr-grid="sm-4 md-last lg-first"></div>
        </div>
    </div>
</div>
<div class="container-mixin">
    <div class="row-mixin between-mixin">
        <div class="n-of-n"></div>
        <div class="n-of-n"></div>
    </div>
</div>

<div class="container-mixin">
    <div class="row-mixin end-mixin">
        <div class="pourcent"></div>
        <div class="pourcent"></div>
        <div class="pourcent"></div>
        <div class="pourcent"></div>
        <div class="pourcent"></div>
    </div>
</div>
