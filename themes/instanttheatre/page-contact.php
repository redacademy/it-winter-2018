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



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content-contact-page">
		
		<?php the_content(); ?>

<div id="contact-sidebar" class="contact-sidebar">
                <?php
                if(is_active_sidebar('contact-page-contact-sidebar')){
                dynamic_sidebar('contact-page-contact-sidebar');
                }
								?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

				<?php echo CFS()->get( 'say_hello' ); ?>

								
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<<<<<<< HEAD

=======
	
>>>>>>> e42a46d35eddaabe670eb8a44c45ac4c22a68f35
<?php get_footer(); ?>
