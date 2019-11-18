<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			
				<div class="site-branding">
					<div class="logo">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<a href="<?php echo home_url(); ?>">
                    <img class="tent-logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" />
				</a>
         
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">

					<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> -->
				</div><!-- .site-branding -->
				


				










					
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			<?php

			if ( is_front_page()){
				if ( has_post_thumbnail() ) { ?>
					<div class="fp-banner">
						
            <?php the_post_thumbnail(); ?>
            <img class="fp-banner-logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg"/>
        </div>
        <?php
					
					// the_post_thumbnail();
				} 
			

			} elseif (is_page('about')) {
				if ( has_post_thumbnail() ) { ?>
					<div class="about-page">
						<h1 class="hero-title">
							<?php the_title(); ?>
						</h1>
						<?php the_post_thumbnail(); ?>
					</div>
				<?php } 
				
				//do something
			} ?>

			<div id="content" class="site-content">
			