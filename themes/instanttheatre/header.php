<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<header id="masthead" class="site-header" role="banner">
			<div class="front-page-snap-menu">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>


					<nav id="site-navigation" class="main-navigation">
						<a class="desktop-rocket-logo" href="<?php echo esc_url(home_url('/') );?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/logo/primary/black.png" />
						</a>
						<a class="circular-rocket-logo" href="<?php echo esc_url(home_url('/') );?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/logo/circular/black.png" />
						</a>
						<input type="checkbox" class="menu-toggle" id="toggle-button" aria-controls="primary-menu" aria-expanded="false">
						<label for="toggle-button" class="hamburger-toggle">
							<i class="fa fa-bars"></i>
						</label>

						<nav class="toggle-menu-wrapper">
							<form class="search-form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
								<label for="toggle-button" class="hamburger-toggle-button">
									<i class="fa fa-bars"></i>
								</label>
								<label>
									<input type="search" class="search-field" placeholder="Search" value="<?php echo esc_attr( get_search_query() ); ?>" name="s"
									  title="Search for:" />
								</label>
								<button type="submit" id="search-button">
									<i class="fa fa-search"></i>
									<span class="screen-reader-text">
										<?php echo esc_html( 'Search' ); ?>
									</span>
								</button>
							</form>


							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>


							<div class="social-media-links">
								<a href="https://www.facebook.com/instanttheatrecompany/">
									<i class="fa fa-facebook-square"></i>
								</a>
								<a href="https://twitter.com/instanttheatre?lang=en">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="https://www.instagram.com/instanttheatre/?hl=en">
									<i class="fa fa-instagram"></i>
								</a>
							</div>
							<!--social media links-->

						</nav>
						<!--toggle menu wrapper-->
					</nav>
					<!-- #site-navigation -->
				</div>
				<!-- .site-branding -->
			</div>



		</header>
		<!-- #masthead -->