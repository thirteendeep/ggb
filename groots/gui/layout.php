<!doctype html>
<!--[if IE]><html class="ie" lang=""><![endif]-->
<!--[if !IE]> --><html lang="" class="flex"><!-- <![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>groots | globalia framework</title>

    <meta name="description" content="">
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- CSS -->
    <link rel="stylesheet" href="/gui/gui.css" rel="preload">
    <link rel="stylesheet" href="/dist/css/groots.css" rel="preload">
    <script src="https://use.fontawesome.com/ef899b4237.js"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/dist/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/dist/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/dist/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/dist/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/dist/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/dist/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/dist/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/dist/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/dist/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/dist/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/dist/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/dist/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/dist/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/dist/favicons/manifest.json">
    <link rel="mask-icon" href="/dist/favicons/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/dist/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--Open Graph-->
    <meta property="og:locale" content="" />
    <meta property="og:type" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />

    <!--Twitter-->
    <meta name="twitter:card" content="" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />

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
    <?php include 'includes/gui-nav.php' ?>
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
