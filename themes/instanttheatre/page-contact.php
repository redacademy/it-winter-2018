<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

							<div id="contact-info" class="contact-info">
                <?php
                if(is_active_sidebar('contact-info')){
                dynamic_sidebar('contact-info');
                }
								?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>


								
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
