<?php
ob_start();
?>
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
            <div gr-grid="sm-3"></div>
            <div gr-grid="sm-3"></div>
            <div gr-grid="sm-3"></div>
            <div gr-grid="sm-3"></div>
            <div gr-grid="sm-3"></div>
            <div gr-grid="sm-3"></div>
        </div>
        <div gr-grid="row lg-between">
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-3"></div>
            <div gr-grid="sm-2"></div>
        </div>
        <div gr-grid="row lg-around">
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-3"></div>
        </div>
        <div class="col-large" gr-grid="row sm-top md-middle lg-top">
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-2"></div>
            <div gr-grid="sm-6 sm-middle md-end"></div>
        </div>
        <div gr-grid="row row--order">
            <div gr-grid="sm-4"></div>
            <div gr-grid="sm-4 md-first lg-last"></div>
            <div gr-grid="sm-4 md-last lg-first"></div>
        </div>
    </div>
</div>
<?php echo codeBlock(ob_get_clean()); ?>
<a class="btn--primary btn--small" href="#" gr-toggle-demo>Show demo</a>
