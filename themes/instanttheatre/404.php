<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="page-content">
				<h1 class="page-title"><?php echo esc_html( '404' ); ?></h1>
					<p>We can’t find what you were looking for! It must have gotten lost in the clouds…</p>
					<a class="blue-btn" href="<?php echo esc_url(home_url('/') );?>">back to home</a>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
