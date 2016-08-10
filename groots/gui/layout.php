<!doctype html>
<!--[if IE]><html class="ie" lang=""><![endif]-->
<!--[if !IE]> --><html lang="" class="flex"><!-- <![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GGB Maconnerie</title>

    <meta name="description" content="">
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- CSS -->
    <link rel="stylesheet" href="/gui/gui.css" rel="preload">
    <link rel="stylesheet" href="/dist/css/groots.css" rel="preload">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Raleway:300,400,500,700,800" rel="stylesheet">
    <script src="https://use.fontawesome.com/ef899b4237.js"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/dist/img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/dist/img/fav/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/dist/img/fav/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/dist/img/fav/manifest.json">
    <link rel="mask-icon" href="/dist/img/fav/safari-pinned-tab.svg" color="#000000">
    <meta name="theme-color" content="#ffffff">
    <!--Open Graph-->
    <meta property="og:locale" content="" />
    <meta property="og:type" content="" />
    <meta property="og:title" content="GGB Maconnerie" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="http://ggbmaconnerie.com/GGB_facebookShare_v1.jpg" />


    <style>
    .gui-nav[gr-nav-sticky='always'] {
        position: relative;
    }
    .background__header {
        position: relative;
    }
    </style>
</head>
<body>
    <div class="site-container">
        <?php
        if (strpos($_GET['page'], '..') == false) {
            include('pages/'.$_GET['page']);
        }
        ?>
    </div>


    <script src="/dist/js/<?php echo (isset($project_name) ? $project_name : 'groots') ?>.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
    </html>
