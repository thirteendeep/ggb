<nav gr-nav gr-nav-effect="reveal-left" gr-nav-sticky="always" class="gui-nav<?php echo (isset($special_class) ? $special_class : '') ?>">
    <button class="gui-nav__nav-icon" gr-nav-trigger="squeeze"><img src="/gui/images/svg/nav-icon.svg" class="svg"></button>
    <div class="gui-nav__nav-title"><?php echo (isset($page) ? $page : "Menu") ?></div>

    <section class="gui-nav__panel" gr-nav-panel>
        <a class="gui-nav__brand" href="index.php">
            <img src="/gui/images/svg/groots-logo.svg" alt="groot" class="svg">ROOTS
        </a>
        <ul class="gui-nav__main">
            <li><a class="gui-nav__link" href="codelines.php"><i class="fa fa-code"></i>Codelines</a></li>
            <li><a class="gui-nav__link" href="styleguide.php"><i class="fa fa-cubes"></i>Styleguide</a></li>
            <li><a class="gui-nav__link" href="components.php"><i class="fa fa-gears"></i>Components</a></li>
            <li><a class="gui-nav__link" href="docs.php"><i class="fa fa-book"></i>Documentation</a></li>
            <li><a class="gui-nav__link" href="layout.php"><i class="fa fa-th-large"></i>Layout</a></li>
            <li><a class="gui-nav__link" href="http://codepen.io/Globalia/" target="_blank"><i class="fa fa-codepen"></i>Codepen</a></li>
        </ul>
    </section>
    <a class="gui-globalia" href="http://www.globalia.ca" target="_blank"><img src="/gui/images/svg/globalia-logo.svg" alt="Globalia" width="100" class="svg" /></a>
</nav>
