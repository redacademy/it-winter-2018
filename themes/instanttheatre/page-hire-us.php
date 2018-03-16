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

				<h1><?php the_title(); ?> </h1>
				
				<?php	the_post_thumbnail(); ?>
				<p><?php echo CFS()->get( 'hire_us_description' ); ?></p>
				
				<div class="hire-us-grid">
			  <?php
					$fields = CFS()->get( 'type_of_events' ); ?>
				
				<?php 
					foreach ( $fields as $field ) { ?>
					<div class="hire-us-part">
					<h2><?php echo $field['heading']; ?></h2>
					<p><?php echo $field['description']; ?></p>
					<p><?php echo $field['perfect_for']; ?></div>
					<?php
					}
					?></div></p>
				</div>

				<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
