<?php
$page = "Components";
include 'includes/gui-head.php'; ?>

<section class="gui-banner">
    <div class="gui-banner__inner">
        <p>Components are reusable pieces of code designed to be scalable.</p>
    </div>
</section><!-- @end gui-info -->

<main class="gui-main">
    <div class="site-container">


        <section class="section-full__homepage-banner">
fsfsdfsd
        </section>


        <div class="gui-item__header">Product</div>
        <section class="section__">
            <div gr-grid="row">
                <div gr-grid="column">
                    <h2 class="site-title--underline">
                        Our best sellers
                    </h2>
                </div>
            </div>
            <div gr-grid="row--block sm-2 md-4">
                <?php
                for ($i=0; $i < 4; $i++) {
                    ?>
                    <div gr-grid="block">
                        <a href="#" class="card-product">
                            <figure class="card-product__media">
                                <img src="/dist/img/product-temp/product-<?php echo $i+1; ?>.png" alt="DD2X3">
                                <figcaption>DD2X3</figcaption>
                            </figure>
                            <div class="card-product__title">
                                DD2X3
                            </div>
                            <div class="card-product__description">
                                Lorem ipsum dolor sit amet consectetur
                            </div>
                            <div class="card-product__price">
                                16 985 <sup>$</sup>
                            </div>
                            <div class="ratings four"></div>
                            <div class="button-container">
                                <span class="btn--primary btn--small">View details</span>
                            </div>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </section>

        <div class="gui-item__header">Search results</div>
        <section class="section__">
            <div gr-grid="row">
                <div gr-grid="column">
                    <h2 class="site-title">
                        Search results for "tables"
                    </h2>
                </div>
            </div>
            <?php
            for ($i=0; $i < 4; $i++) {
                ?>
                <div class="search-element">
                    <div class="search-element__media">
                        <img src="http://placehold.it/120x120" alt="">
                    </div>
                    <div class="search-element__content">
                        <h2 class="search-element__title">
                            Product name
                        </h2>
                        <div class="typography">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quae iusto doloribus cupiditate temporibus ipsum ad, hic dolores praesentium delectus optio et magni sequi non, culpa sint quo amet officiis?
                            </p>
                        </div>
                    </div>
                    <div class="button-container button-container--right">
                        <a href="#" class="btn--primary btn--small">View details</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </section>

        <div class="gui-item__header">Call to action #1</div>
        <section class="section__">
            <div gr-grid="row">
                <div gr-grid="column">
                    <h2 class="site-title">
                        Downdraft tables
                    </h2>
                </div>
            </div>
            <div gr-grid="row">
                <div class="typography" gr-grid="sm-8">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>
                </div>
                <div gr-grid="sm-4">

                    <a href="#" class="cta-read-more">
                        <img src="http://placehold.it/120x130/000000" alt="">
                        <div class="cta-read-more__content">
                            <h2 class="cta-read-more__title">Customized solutions</h2>
                            <span class="cta-read-more__link">
                                <img src="/dist/img/svg/arrow.svg" class="svg" />
                                Read more
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </section>


        <div class="gui-item__header">blog listing</div>
        <section class="section__">
            <div gr-grid="row">
                <div gr-grid="column">
                    <h2 class="site-title">
                        Blog
                    </h2>
                </div>
            </div>
            <div gr-grid="row--block sm-2">
                <?php
                for ($i=0; $i < 3; $i++) {
                    ?>
                    <div gr-grid="block">
                        <a href="#" class="blog-listing-element">
                            <figure class="blog-listing-element__media">
                                <img src="http://placehold.it/600x295" alt="">
                                <figcaption></figcaption>
                            </figure>
                            <h2 class="blog-listing-element__title">
                                LOREM IPSUM DOLOR SIT AMET
                            </h2>
                            <span class="typography">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </span>
                            <span class="button-container">
                                <span class="btn--primary btn--small">Read more</span>
                            </span>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </section>

        <section class="section__">
            <br><br>
            <div class="quote-step">
                <div class="quote-step__progress step1">
                    <span>Step 1 / 3</span>
                </div>
            </div>
            <br><br>
        </section>

        <section class="background__banner-application">
            <div class="section-full__banner-application">
                <div gr-grid="row">
                    <div class="banner-application__content" gr-grid="column md-offset-5 lg-offset-6">
                        <h2 class="site-title--underline site-title--white">
                            DOWNDRAFT TABLE APPLICATIONS
                        </h2>
                        <div class="typography">
                            <p>
                                A technology leader in the Air Filtration & Dust Collection industry, we deliver reliable products manufactured to perform correctly in your application.  When designing Fume & Dust Control products, our first priority is worker safety.  Keeping unbreathables away from the operator’s repository zone requires capture-at-source equipment that is easy-to-use, easier-to-service, and is powerful enough to return truly clean air.
                            </p>
                        </div>
                        <div class="button-container">
                            <a href="#" class="btn--quaternary"><img src="/dist/img/svg/welding.svg" class="svg" /> Welding</a>
                            <a href="#" class="btn--quaternary"><img src="/dist/img/svg/grinder.svg" class="svg" /> Grinding &amp; deburring</a>
                            <a href="#" class="btn--quaternary"><img src="/dist/img/svg/cutting.svg" class="svg" /> Laser &amp; Plasma cutting</a>
                            <a href="#" class="btn--quaternary"><img src="/dist/img/svg/soldering.svg" class="svg" /> Soldering</a>
                            <a href="#" class="btn--quaternary"><img src="/dist/img/svg/painting.svg" class="svg" /> Painting &amp; Coating</a>
                            <a href="#" class="btn--quaternary"><img src="/dist/img/svg/sanding.svg" class="svg" />Sanding &amp; finishing</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__application">
            <div gr-grid="row">
                <div gr-grid="column">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                    </ul>
                    <h2 class="site-title">
                        Grinding
                    </h2>
                </div>
            </div>
            <?php
            for ($i=0; $i < 2; $i++) {
                ?>
                <div  class="application-element">
                    <div class="application-element__image">
                        <img src="http://placehold.it/760x260" alt="">
                    </div>
                    <div class="application-element__content">
                        <h2 class="application-element__title">
                            Communicate that we understand the application
                        </h2>
                        <div class="typography">
                            <p>
                                Welding can devastate your indoor air quality, leaving workers exposed to harsh fumes and gases. Before selecting equipment to capture and filter weld fumes, you need to consider:
                            </p>
                            <ul>
                                <li>
                                    What type of welding? (ie. MIG, TIG, Stick)
                                </li>
                                <li>
                                    What type of material is being processed? (ie. Steel, Stainless Steel, coated metals)
                                </li>
                                <li>
                                    Will you exhaust indoors or outdoors?
                                </li>
                                <li>
                                    What kind of duty time will your downdraft table see?
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div  class="application-element--invert">
                    <div class="application-element__image">
                        <img src="http://placehold.it/760x260" alt="">
                    </div>
                    <div class="application-element__content">
                        <h2 class="application-element__title">
                            Communicate that we understand the application
                        </h2>
                        <div class="typography">
                            <p>
                                Welding can devastate your indoor air quality, leaving workers exposed to harsh fumes and gases. Before selecting equipment to capture and filter weld fumes, you need to consider:
                            </p>
                            <ul>
                                <li>
                                    What type of welding? (ie. MIG, TIG, Stick)
                                </li>
                                <li>
                                    What type of material is being processed? (ie. Steel, Stainless Steel, coated metals)
                                </li>
                                <li>
                                    Will you exhaust indoors or outdoors?
                                </li>
                                <li>
                                    What kind of duty time will your downdraft table see?
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <div class="hr-button">
                <a class="btn--primary" href="#">
                    <img src="/dist/img/svg/request_quote.svg" class="svg" />
                    Request a quote
                </a>
            </div>
        </section>

        <section class="background__banner-slider">
            <div class="section__banner-slider">
                <div gr-grid="row">
                    <div gr-grid="column">
                        <h2 class="site-title--underline site-title--black">
                            They trust us
                        </h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__">
            <div gr-grid="row">
                <div gr-grid="column">
                    <h2 class="site-title--underline">
                        Our guarantees
                    </h2>
                </div>
            </div>
            <div class="guarantees-tag__container" gr-grid="row--block md-4">
                <div gr-grid="block">
                    <div class="guarantees-tag">
                        <i class="guarantees-tag__icon">
                            <img src="/dist/img/svg/guarantee.svg" class="svg" />
                        </i>
                        <div class="guarantees-tag__title">
                            2 years guarantee
                        </div>
                    </div>
                </div>
                <div gr-grid="block">
                    <div class="guarantees-tag">
                        <i class="guarantees-tag__icon">
                            <img src="/dist/img/svg/quality.svg" class="svg" />
                        </i>
                        <div class="guarantees-tag__title">
                            Quality build
                        </div>
                    </div>
                </div>
                <div gr-grid="block">
                    <div class="guarantees-tag">
                        <i class="guarantees-tag__icon">
                            <img src="/dist/img/svg/certification.svg" class="svg" />
                        </i>
                        <div class="guarantees-tag__title">
                            Certified products (ETL)
                        </div>
                    </div>
                </div>
                <div gr-grid="block">
                    <div class="guarantees-tag">
                        <i class="guarantees-tag__icon">
                            <img src="/dist/img/svg/delivery.svg" class="svg" />
                        </i>
                        <div class="guarantees-tag__title">
                            Fast delivery
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="background__footer-top">
                <div class="section__footer">
                    <div class="wrapper__footer">
                        <ul class="footer__list">
                            <li class="footer__title">
                                Downdraft tables
                            </li>
                            <li>
                                <a href="#">
                                    Portable Downdraft Tables
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Industrial Downdraft Tables
                                </a>
                            </li>
                        </ul>
                        <ul class="footer__list">
                            <li class="footer__title">
                                Downdraft booths
                            </li>
                            <li>
                                <a href="#">
                                    Portable Downdraft Tables
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Industrial Downdraft Tables
                                </a>
                            </li>
                        </ul>
                        <ul class="footer__list">
                            <li class="footer__title">
                                Downdraft tables
                            </li>
                            <li>
                                <a href="#">
                                    Wet Dust Collectors
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Self-Contained Tables
                                </a>
                            </li>
                        </ul>
                        <ul class="footer__list">
                            <li class="footer__title">
                                Downdraft tables
                            </li>
                            <li>
                                <a href="#">
                                    Portable Downdraft Tables
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Industrial Downdraft Tables
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="background__footer-bottom">
                <div class="section__footer">
                    <div class="wrapper__footer">
                        <ul class="footer__list">
                            <li class="footer__logo">
                                <img src="/dist/img/logo-diversitech.png" alt="Diversitech">
                                <img src="/dist/img/logo-flume.png" alt="Flume">
                            </li>
                            <li>

                            </li>
                        </ul>
                        <ul class="footer__list">
                            <li class="footer__title">
                                Downdraft tables
                            </li>
                            <li>
                                <a href="#">
                                    Portable Downdraft Tables
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Industrial Downdraft Tables
                                </a>
                            </li>
                        </ul>
                        <ul class="footer__list">
                            <li class="footer__title">
                                Downdraft tables
                            </li>
                            <li>
                                <a href="#">
                                    Portable Downdraft Tables
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Industrial Downdraft Tables
                                </a>
                            </li>
                        </ul>
                        <ul class="footer__list">
                            <li class="footer__title">
                                follow us
                            </li>
                            <li>
                                <div class="social-icons--link">
                                    <a href="https://www.facebook.com/" social="facebook"><span>Facebook</span></a>
                                    <a href="https://www.linkedin.com/" social="linkedin"><span>LinkedIn</span></a>
                                    <a href="https://plus.google.com/‎" social="google"><span>Google+</span></a>
                                </div>
                            </li>
                            <li class="footer__copyright">
                                <span>© Copyright Downdraft 2016 <br >All rights reserved</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </div>

</main>

<?php include 'includes/gui-footer.php' ?>
