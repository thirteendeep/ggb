<nav gr-nav gr-nav-effect="reveal-left" gr-nav-sticky="always" class="gui-nav<?php echo (isset($special_class) ? $special_class : '') ?>">
    <button class="gui-nav__nav-icon" gr-nav-trigger="squeeze"><img src="/gui/images/svg/nav-icon.svg" class="svg"></button>
    <div class="gui-nav__nav-title"><?php echo (isset($page) ? $page : "Menu") ?></div>

    <section class="gui-nav__panel" gr-nav-panel>
        <a class="gui-nav__brand" href="index.php">
        </a>
        <ul class="gui-nav__main">
            <li><a class="gui-nav__link" href="index.php"><i class="fa fa-cubes"></i>Styleguide</a></li>
            <li><a class="gui-nav__link" href="components.php"><i class="fa fa-gears"></i>Components</a></li>
            <li><a class="gui-nav__link gui-nav__page" href="layout.php?page=homepage.php"><i class="fa fa-page"></i>Homepage</a></li>
            <li><a class="gui-nav__link gui-nav__page" href="layout.php?page=application-custom.php"><i class="fa fa-page"></i>Application custom</a></li>
            <li><a class="gui-nav__link gui-nav__page" href="layout.php?page=account.php"><i class="fa fa-page"></i>Account</a></li>
            <li><a class="gui-nav__link gui-nav__page" href="layout.php?page=about-us.php"><i class="fa fa-page"></i>About us</a></li>
            <li><a class="gui-nav__link gui-nav__page" href="layout.php?page=blog-inner.php"><i class="fa fa-page"></i>Blog inner</a></li>
            <li><a class="gui-nav__link gui-nav__page" href="layout.php?page=blog-listing.php"><i class="fa fa-page"></i>Blog listing</a></li>
            <li><a class="gui-nav__link gui-nav__page" href="layout.php?page=categorie.php"><i class="fa fa-page"></i>Catégorie</a></li>
            <li><a class="gui-nav__link gui-nav__page" href="layout.php?page=contact-us.php"><i class="fa fa-page"></i>Contact us</a></li>
            <li><a class="gui-nav__link gui-nav__page" href="layout.php?page=faq.php"><i class="fa fa-page"></i>FAQ</a></li>
            <li><a class="gui-nav__link gui-nav__page" href="layout.php?page=request-a-quote.php"><i class="fa fa-page"></i>Request a quote</a></li>
            <li><a class="gui-nav__link gui-nav__page" href="layout.php?page=search-results.php"><i class="fa fa-page"></i>Search results</a></li>
            <li><a class="gui-nav__link gui-nav__page" href="layout.php?page=terms-and-conditions.php"><i class="fa fa-page"></i>Terms and conditions</a></li>
        </ul>
    </section>
</nav>
