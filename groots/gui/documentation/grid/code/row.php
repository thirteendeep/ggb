<?php
ob_start();
?>
<div gr-grid="container">
    <div gr-grid="row row--reverse">
        <div gr-grid="sm-2"></div>
        <div gr-grid="sm-2"></div>
        <div gr-grid="sm-3"></div>
    </div>
    <div gr-grid="row lg-center">
        <div gr-grid="sm-2"></div>
        <div gr-grid="sm-2"></div>
        <div gr-grid="sm-2"></div>
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
</div>
<?php echo codeBlock(ob_get_clean()); ?>
<a class="btn--primary btn--small" href="#" gr-toggle-demo>Show demo</a>
