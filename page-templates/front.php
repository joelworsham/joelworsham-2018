<?php
/*
Template Name: Front
*/
get_header(); ?>

    <header class="front-header animate">
        <div class="front-header-main">
            <div class="front-header-main-container">
                <div class="front-header-main-intro">
                    <div class="front-header-main-intro-a">
                        Hello,<br/>
                        My name is
                    </div>

                    <div class="front-header-main-intro-b">
                        Joel Worsham
                    </div>

                    <div class="front-header-main-intro-c">
                        and I make web stuff.
                    </div>
                </div>

                <div class="front-header-main-action">
                    <a href="/work/" class="front-header-main-action-work button">
                        <span class="button-text">My Work</span>
                    </a>
                    <br/>
                    <a href="/contact/" class="front-header-main-action-contact">
                        or contact me
                    </a>
                </div>
            </div>
        </div>

        <div class="front-header-showcase">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/front/showcase-site-1.png"
                 class="front-header-showcase-site-1" alt="website example 1"/>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/front/showcase-site-2.png"
                 class="front-header-showcase-site-2" alt="website example 2"/>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/front/showcase-site-3.png"
                 class="front-header-showcase-site-3" alt="website example 3"/>
        </div>
    </header>

    <section class="front-features">
        <div class="front-feature animate">
            <div class="front-feature-copy">
                <div class="front-feature-copy-container">
                    <h2 class="front-feature-copy-heading">
                        Eye for Design
                    </h2>

                    <div class="front-feature-copy-content">
                        My career began with graphic design, and everything I build is clean, modern, and beautiful. I
                        put the aesthetic of a website at the level of importance of the under-belly of code and
                        content. If it doesn’t look good, people won’t want to use it.
                    </div>
                </div>
            </div>

            <div class="front-feature-icons ">
                <span class="front-feature-icon-1 fa fa-mobile-alt"></span>
                <span class="front-feature-icon-2 fa fa-ruler"></span>
                <span class="front-feature-icon-3 fa fa-eye-dropper"></span>
            </div>
        </div>

        <div class="front-feature animate">
            <div class="front-feature-copy">
                <div class="front-feature-copy-container">
                    <h2 class="front-feature-copy-heading">
                        Clean, Performant Code
                    </h2>

                    <div class="front-feature-copy-content">
                        Getting a headache from looking at ugly code is absolutely out of the question. I put time and
                        care into the code I write. Thorough documentation, easy to digest programming paradigms, and
                        fast execution are my top priorities.
                    </div>
                </div>
            </div>

            <div class="front-feature-icons">
                <span class="front-feature-icon-1 fa fa-broom"></span>
                <span class="front-feature-icon-2 fa fa-chart-line"></span>
                <span class="front-feature-icon-3 fa fa-code"></span>
            </div>
        </div>

        <div class="front-feature animate">
            <div class="front-feature-copy">
                <div class="front-feature-copy-container">
                    <h2 class="front-feature-copy-heading">
                        Latest Technologies
                    </h2>

                    <div class="front-feature-copy-content">
                        I get way too excited about new technologies. From modern front-end frameworks, to robust build
                        suites, I always stay up to date with the latest and greatest tools and systems out there.
                        jQuery, Gulp, React, Foundation Framework, Vagrant, WordPress, and Git, to name a few.
                    </div>
                </div>
            </div>

            <div class="front-feature-icons">
                <span class="front-feature-icon-1 fab fa-gulp"></span>
                <span class="front-feature-icon-2 fab fa-react"></span>
                <span class="front-feature-icon-3 fab fa-wordpress-simple"></span>
            </div>
        </div>
    </section>

    <section class="front-details">
        <div class="front-details-description">
            Okay, let’s get down to the nitty gritty.
            <br/><br/>
            Here are some highlights of my knowledge and experience with building custom, modern, and beautiful web
            applications.
            <br/><br/>
            <p class="front-details-technologies">
                <a href="/work/#technologies">Want more details? Check out some more technologies&nbsp;<span class="fa fa-arrow-alt-circle-right"></span></a>
            </p>
        </div>

        <div class="front-details-specifics animate">
            <div class="front-details-specifics-section">
                <h3 class="front-details-specifics-section-heading">
                    Web Languages
                </h3>

                <div class="front-details-specifics-section-list">
                    HTML, CSS, Sass, JavaScript (including ES6), PHP
                </div>
            </div>

            <div class="front-details-specifics-section">
                <h3 class="front-details-specifics-section-heading">
                    Tools & Frameworks
                </h3>

                <div class="front-details-specifics-section-list">
                    Sketch, React (and Redux), WordPress, REST, Foundation Framework, Vagrant
                </div>
            </div>

            <div class="front-details-specifics-section">
                <h3 class="front-details-specifics-section-heading">
                    Design Experience
                </h3>

                <div class="front-details-specifics-section-list">
                    UX/UI Design, Full Website Mocks, Mobile and Responsive Web, User Driven Design
                </div>
            </div>
        </div>
    </section>

    <section class="front-bottom-cta">
        <div class="front-bottom-cta-contact">
            <div class="front-bottom-cta-background"></div>
            <div class="front-bottom-cta-content">
                <span id="cta-label-contact">Contact</span>
            </div>
            <a href="/contact/" aria-labelledby="cta-label-contact"></a>
        </div>

        <div class="front-bottom-cta-work">
            <div class="front-bottom-cta-background"></div>
            <div class="front-bottom-cta-content">
                <span id="cta-label-work">My Work</span>
            </div>
            <a href="/work/" aria-labelledby="cta-label-work"></a>
        </div>
    </section>

    <section class="front-about">
        <div class="front-about-picture">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/front/joel-worsham.jpg"
                 class="animate" alt="joel worsham" />
        </div>

        <div class="front-about-bio animate">
            <h2 class="front-about-bio-heading">
                A Little Bit About Me
            </h2>
            <p>I’ve been in the industry since around 2013, but have always been involved with designing and fascinated
                with problem solving. Ending up in the web business was only a matter of time, and I find so much
                enjoyment and passion from it. Is there anything more fulfilling than leaning back and enjoying a
                finished web application?</p>

            <p>I’m currently located in the fine city of Indianapolis and thrive on the community and activity that is
                always bubbling downtown. Indy is a wonderful place to call home and I will always have such a warm
                place in my heart for the Midwest as a whole.</p>

            <p>Me and my wife are both active musicians in the area and love the local music scene here. I also love
                seeking out local food and drinks. I mean, who doesn’t love a good local burger and draft at Kuma’s
                Korner? We also are obsessed with coffee and I even roast my own at home!</p>
        </div>
    </section>

<?php get_footer();
