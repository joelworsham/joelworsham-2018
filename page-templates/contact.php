<?php
/*
Template Name: Contact
*/
get_header(); ?>

    <header class="site-header animate" role="banner">
        <div class="site-header-page-info">
            <h1 class="page-title">
                Contact Me
            </h1>

            <div class="page-description">
                Need to get a hold of me? Use the form below and I'll respond as soon as I can.
            </div>
        </div>

        <nav class="site-navigation" role="navigation">
            <ul class="menu vertical">
                <li>
                    <a href="<?php bloginfo( 'url' ); ?>" class="site-navigation-home">
                        <span class="site-navigation-home-icon fa fa-arrow-alt-circle-left"></span> Back to Home
                    </a>
                </li>

                <li>
                    <a href="/work/" class="site-navigation-contact">
                        My Work
                    </a>
                </li>
            </ul>
        </nav>
    </header>

<section class="contact-form">
    <?php
    if ( function_exists( 'Ninja_Forms' ) ) {

        Ninja_Forms()->display( 1 );
    }
    ?>
</section>

<?php get_footer();
