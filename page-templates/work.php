<?php
/*
Template Name: Work
*/

$portfolio = array(
	'nbs'        => array(
		'title'                  => 'Napoleon Bee Supply',
		'site_url'               => 'https://napoleonbeesupply.com',
		'description'            => 'A small bee supplier out of Michigan needed a website refresh, desperately! Focusing strongly on eCommerce, I designed and built a modern and clean website to satisfy all their bee needs.',
		'technologies'           => array(
			'PHP',
			'CSS',
			'SASS',
			'JS',
			'ES6',
			'Gulp',
			'Foundation for Sites',
			'HTML',
			'WordPress',
			'Git',
			'GitHub',
		),
		'highlight_technologies' => array(
			'php',
			'css3-alt',
		),
	),
	'renderwp'   => array(
		'title'                  => 'Render WP',
		'site_url'               => 'http://renderwp.com',
		'description'            => 'This website is a showcase for a custom plugin that I developed called Render. Though the plugin itself is no longer in use, I am still proud of the website.',
		'technologies'           => array(
			'PHP',
			'CSS',
			'SASS',
			'JS',
			'Grunt',
			'HTML',
			'WordPress',
			'Git',
			'GitHub',
		),
		'highlight_technologies' => array(
			'grunt',
			'wordpress',
		),
	),
	'clientdash' => array(
		'title'                  => 'Client Dash',
		'site_url'               => 'https://realbigplugins.com/plugins/client-dash',
		'description'            => 'This is a WordPress plugin that allows the user to completely customize the WordPress administrative portion of the website. I chose to showcase this mostly because of the fully React driven interface. It leverages React to create a clean, fast, interactive website app.',
		'technologies'           => array(
			'React',
			'PHP',
			'CSS',
			'SASS',
			'JS',
			'ES6',
			'Gulp',
			'HTML',
			'WordPress',
			'Git',
			'GitHub',
		),
		'highlight_technologies' => array(
			'react',
			'sass',
		),
		'no_mobile'              => true,
	),
	'parallax'   => array(
		'title'                  => 'Parallax Noise',
		'site_url'               => 'https://parallaxnoise.com',
		'description'            => 'This was a fun one! Parallax Noise is me and my wife\'s band. I needed to get a website up FAST; so I built this site in a couple of days! It\'s quite simplistic, but unique and clean with a fun, retro 8-bit vibe to it.',
		'technologies'           => array(
			'PHP',
			'CSS',
			'SASS',
			'JS',
			'Gulp',
			'HTML',
			'WordPress',
			'Git',
			'GitHub',
		),
		'highlight_technologies' => array(
			'html5',
			'php',
		),
	),
	'romay'      => array(
		'title'                  => 'Romay Corporation',
		'site_url'               => 'https://romaycorp.com',
		'description'            => 'This company is an industrial supplier of ceramic inserts. I wanted to keep the look professional, industrial, and minimal. Even though the client did not have the budget for a modern re-branding or higher quality photo assets, the site came out crisp, clean, and gets customers where they need to go.',
		'technologies'           => array(
			'PHP',
			'CSS',
			'SASS',
			'JS',
			'Gulp',
			'HTML',
			'WordPress',
			'WooCommerce',
			'Git',
			'GitHub',
		),
		'highlight_technologies' => array(
			'github',
			'gulp',
		),
	),
	'applegate'  => array(
		'title'       => 'Applegate Construction',
		'description' => 'This design mock never actually became a website, as the client had budget issues and employee turnover, but it was back in my early days of design and I\'m still proud of it.',
	),
);

get_header(); ?>

    <header class="site-header animate" role="banner">
        <div class="site-header-page-info">
            <h1 class="page-title">
                My Work
            </h1>

            <div class="page-description">
                Below you will find some of the various projects I’ve been a part of.
                <br/>
                <div class="work-technologies-skip">
                    or skip to&nbsp;
                    <a href="#technologies">
                        <span class="button-text">Technology Overview</span>
                    </a>
                </div>
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
                    <a href="/contact/" class="site-navigation-contact">
                        Contact Me
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="portfolio">
		<?php foreach ( $portfolio as $i => $item ) : ?>
            <div class="portfolio-item">
                <div class="portfolio-item-summary">
                    <div class="portfolio-item-content animate">
                        <h2 class="portfolio-item-title">
							<?php echo $item['title']; ?>
                        </h2>

                        <div class="portfolio-item-description">
							<?php echo $item['description']; ?>
                        </div>

                        <a href="#" class="portfolio-item-button" data-portfolio-preview="<?php echo $i; ?>">
                            <span class="button-text">View Preview</span>
                        </a>

						<?php if ( isset( $item['site_url'] ) ) : ?>
                            <a href="<?php echo esc_url_raw( $item['site_url'] ); ?>" class="portfolio-item-site-link"
                               rel="nofollow" target="_blank">
                                view the site <span class="fa fa-external-link-alt"></span>
                            </a>
						<?php endif; ?>
                    </div>

                    <div class="portfolio-item-images animate">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/portfolio/portfolio-<?php echo $i; ?>-site.png"
                             class="portfolio-item-image-site"/>

						<?php if ( ! isset( $item['no_mobile'] ) ) : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/portfolio/portfolio-<?php echo $i; ?>-mobile.png"
                                 class="portfolio-item-image-mobile"/>
						<?php endif; ?>
                    </div>
                </div>

				<?php if ( isset( $item['technologies'] ) ) : ?>
                    <div class="portfolio-item-details">
                        <div class="portfolio-item-details-container">
                            <div class="portfolio-item-details-technologies">
                                <h3>Technologies Used</h3>
								<?php echo implode( ', ', $item['technologies'] ); ?>
                            </div>

                            <div class="portfolio-item-details-technology-icons">
								<?php foreach ( $item['highlight_technologies'] as $technology ) : ?>
                                    <span class="portfolio-item-technology-icon fab fa-<?php echo $technology; ?>"></span>
								<?php endforeach; ?>
                            </div>
                        </div>
                    </div>
				<?php endif; ?>
            </div>
		<?php endforeach; ?>
    </section>

    <div id="portfolio-frame">
        <div class="portfolio-frame-background" data-portfolio-close></div>

        <button class="portfolio-frame-close" data-portfolio-close>
            <span class="fa fa-times-circle"></span>
        </button>

        <div class="portfolio-frame-container">
            <div class="portfolio-frame-image"></div>
        </div>

        <div class="portfolio-frame-views">
            <button class="portfolio-frame-view-site" data-portfolio-site>
                <span class="fa fa-desktop" title="Mobile View" aria-label="Mobile View"></span>
            </button>
            <button class="portfolio-frame-view-mobile" data-portfolio-mobile>
                <span class="fa fa-mobile-alt" title="Mobile View" aria-label="Mobile View"></span>
            </button>
        </div>
    </div>

    <div class="work-summary">
        <div class="work-summary-container">
            <div class="work-summary-content">
                Well, hopefully the above highlighted projects give you a glimpse into the work I do. My day-to-day
                typically consists of either diving deep into code for building custom websites and web-apps, or mocking
                up design assets for websites and branding. (I also designed and developed this website!)
                <br/><br/>
                Below you can find a laundry list of about everything I know and use!
            </div>
        </div>
    </div>

    <div id="technologies" class="work-technologies">
        <div class="work-technologies-develop">
            <div class="work-technologies-container">
                <div class="work-technologies-details">
                    <h2>Development</h2>
                    <p>
                        Development is definitely more of what I do. I consider myself an expert in most modern web technologies. Almost all of my code is written with Object Oriented Principals, thorough documentation, and sensible architectural paradigms.
                    </p>
                </div>

                <div class="work-technologies-lists animate">
                    <h3 class="work-technologies-heading">
                        Languages
                    </h3>

                    <div class="work-technologies-list">
                        PHP, HTML (and HTML5), CSS (and CSS3), SASS, JavaScript (including ES6), JSON,  MarkDown, Bash, YAML
                    </div>

                    <h3 class="work-technologies-heading">
                        Frameworks and Technologies
                    </h3>

                    <div class="work-technologies-list">
                        React (some Redux), jQuery, REST, SQL, Node, Gulp, Grunt, Webpack, Babel, Foundation for Sites, WordPress (custom theme and plugin development)
                    </div>

                    <h3 class="work-technologies-heading">
                        Tools & Applications
                    </h3>

                    <div class="work-technologies-list">
                        Git, GitHub, BitBucket, Slack, PHP Storm, iTerm, Sublime
                    </div>
                </div>
            </div>
        </div>
        <div class="work-technologies-design">
            <div class="work-technologies-container">
                <div class="work-technologies-details">
                    <h2>Design</h2>
                    <p>
                        I love working with designs. Coming up with a website design is one of my favorite things to do. Sometimes I forget to eat I get so into it! This website was fully designed by me as well.
                    </p>
                </div>

                <div class="work-technologies-lists animate">
                    <h3 class="work-technologies-heading">
                        Tools & Applications
                    </h3>

                    <div class="work-technologies-list">
                        Sketch (and Craft), InVision, Pixelmator, Photoshop and Illustrator (limited experience)
                    </div>

                    <h3 class="work-technologies-heading">
                        Experience
                    </h3>

                    <div class="work-technologies-list">
                        UX/UI Design, Full Website Mocks, Mobile and Responsive Web, User Driven Design
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="resume">
    Want to download my official resume? Here you go!
    <br/><br/>
    <a href="<?php echo get_template_directory_uri(); ?>/dist/assets/files/JoelWorshamResume.pdf" class="resume-download">
        <span class="button-text">Download Resume</span>
    </a>
</div>

<?php get_footer();
