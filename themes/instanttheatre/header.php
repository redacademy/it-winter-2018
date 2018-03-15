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

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<a href="<?php echo esc_url(home_url('/') );?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/primary/black.png";/></a>
					<input type="checkbox" class="menu-toggle" id="toggle-button" aria-controls="primary-menu" aria-expanded="false" ></input>	
					<label for="toggle-button" class="hamburger-toggle"><i class="fas fa-bars"></i></label>
				<nav class="toggle-menu-wrapper">
					<div class="search">
						<input type="text" id="hamburger-search" placeholder="Search">
						<button type="button" id="search-button"><i class="fas fa-search"></i></button>
					</div>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
