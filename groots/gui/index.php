<?php
$special_class = " homepage";
include 'includes/gui-head.php'; ?>

<header class="gui-banner--home">
    <div class="gui-banner--home__cover"><img src="/gui/images/bg-home.jpg" alt=""></div>
    <div class="gui-banner--home__inner typography">
        <a class="logo">
            <img src="/gui/images/svg/groots-logo.svg" alt="" class="svg">
        </a>
        <h1>Flexible, robust and homogeneous framework</h1>
        <p>
            <strong>groots</strong> is <a href="http://www.globalia.ca/" target="_blank">globalia's</a> HTML, CSS, and JS framework for developing responsive, mobile first projects on the web.
        </p>
        <a href="#gui-start" class="gui-banner--home__arrow" gr-scroll-to=".gui-nav">
            <span>Learn more</span>
            <span class="fa fa-arrow-circle-down"></span>
        </a>
    </div>
</header>

<main class="gui-main typography" id="gui-start">
    <section class="gui-section" gr-grid="container">

                <h2>Repeat less, <span>Create more</span></h2>
                <p>Globalia's <strong>groots</strong> makes front-end web development faster and easier.</p>
                <p>It combines best practices for today's responsive web with the core components we use on (almost) every project.</p>
                <p>It is the front-end starter files for any new web project.
                <br/>It sets up your Sass architecture and normalizes your CSS and native HTML elements.
                <br/>It provides the structural groundwork for your application.</p>
                <a href="/gui/docs.php" class="b-btn b-btn--secondary">View <strong>groots</strong>' documentation</a>

    </section>
    <section class="gui-section--responsive" gr-grid="container--fluid">
        <div gr-grid="row">
            <div gr-grid="sm-5 lg-3">
                <h2>Mobile-<strong>First</strong></h2>
                <p>Today, the web landscape becomes increasingly complex but two main factors still drives your web experience: screen size and data usage.</p>
                <p>In order to offer the best context to your visitor, <strong>groots</strong> is built following the Mobile-First Approach to offer Progressive Enhancement and Touch-Friendly interactions.</p>
            </div>
            <div gr-grid="lg-3">
                <img class="schema" src="http://johnpolacek.github.io/scrolldeck.js/decks/responsive/img/responsive_web_design.png" alt="">
            </div>
            <div gr-grid="sm-5 lg-3">
                <h2>Responsive <strong>components</strong></h2>
                <p>All <strong>groots</strong> components are built using relative units (em/rem/percent) to be fully responsive.</p>
                <p>A custom flex-based grid allows designers and developpers to explore new layouts magic.</p>
            </div>
        </div>
    </section>
    <section class="gui-section" gr-grid="container">
        <div gr-grid="row">
            <div gr-grid="sm-12">
                <h2><span>Modular</span> structure</h2>
            </div>
            <div gr-grid="sm-3">
                <a href="styleguide.php" class="gui-features">
                    <div class="gui-features__icon fa fa-cubes"></div>
                    <h3>Styleguide</h3>
                    <p>A Styleguide is the primary visual DNA of your company’s branding.</p>
                    <p>It is used to create a cohesive look across all web-based channels.</p>
                </a>
            </div>
            <div gr-grid="sm-3">
                <a href="components.php" class="gui-features">
                    <div class="gui-features__icon fa fa-gears"></div>
                    <h3>Components</h3>
                    <p>GROOTS provides a library of production-ready web components to help developpers to build custom interfaces for your product.</p>
                </a>
            </div>
            <div gr-grid="sm-3">
                <a href="layout.php" class="gui-features">
                    <div class="gui-features__icon fa fa-th-large"></div>
                    <h3>Layout</h3>
                    <p>A built-on-the-fly fluid layout to showcase your website components in real context.</p>
                </a>
            </div>
        </div>
    </section>

    <section class="gui-section--codepen" gr-grid="container--fluid">
        <div gr-grid="row">
            <div gr-grid="sm-8">
                <h2>Follow us on <strong>codepen</strong> !</h2>
                <img src="/gui/images/svg/technologies/codepen-logo.svg" alt="Codepen" width="160" class="codepen" />
                <p>Our frontend and design teams are proud of their work.</p>
                <p>That's we decided to put up all of our latest components collections on codepen so you can go and check them out.</p>
                <a href="http://codepen.io/Globalia/" class="b-btn b-btn--secondary" target="_blank">See our showcase</a>
            </div>
        </div>
    </section>

    <section class="gui-section" gr-grid="container">
        <h2>Groots uses the following <span>technologies</span></h2>
        <ul class="inline-list">
            <li>
                <a href="http://bower.io/" target="_blank"><img src="/gui/images/svg/technologies/bower-logo.svg" alt="Bower" width="100"></a>
            </li>
            <li>
                <a href="https://www.php.net/" target="_blank"><img src="/gui/images/svg/technologies/php-logo.svg" alt="Php" width="130"></a>
            </li>
            <li>
                <a href="https://www.npmjs.com/" target="_blank"><img src="/gui/images/svg/technologies/npm-logo.svg" alt="NPM" width="130"></a>
            </li>
            <li>
                <a href="https://nodejs.org/" target="_blank"><img src="/gui/images/svg/technologies/node-js-logo.svg" alt="Nodejs" width="160"></a>
            </li>
            <li>
                <a href="http://gulpjs.com/" target="_blank"><img src="/gui/images/svg/technologies/gulp-logo.svg" alt="Gulp" width="60"></a>
            </li>
            <li>
                <a href="http://sass-lang.com/" target="_blank"><img src="/gui/images/svg/technologies/sass-logo.svg" alt="Sass" width="130"></a>
            </li>
            <li>
                <img src="/gui/images/svg/technologies/css3-logo.svg" alt="CSS3" width="70">
            </li>
            <li>
                <img src="/gui/images/svg/technologies/javascript-logo.svg" alt="Javascript" width="90">
            </li>
            <li>
                <img src="/gui/images/svg/technologies/json-logo.svg" alt="Javascript" width="90">
            </li>
            <li>
                <a href="https://jquery.com/" target="_blank"><img src="/gui/images/svg/technologies/jquery-logo.svg" alt="JQuery" width="210"></a>
            </li>
        </ul>
    </section>
</main>

<?php include 'includes/gui-footer.php' ?>
