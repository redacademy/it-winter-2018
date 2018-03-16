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
					<h3>Perfect for:</h3>
					<?php 
						$perfect_for = $field['perfect_for']; 
						$perfect_for = explode(", ", $perfect_for); ?>
						<ul><?php
						foreach ( $perfect_for as $fits ) { ?>
							<li><?php echo $fits; ?></li>
						<?php 
						}
					?></ul></div>
					<?php
					}
					?></div>

					<h1>Applied Improv</h1>
					<p><?php echo CFS()->get( 'applied_improv' );  ?></p>

					<div class="hire-us-grid">
			  <?php
					$applied_improv = CFS()->get( 'where_applied' ); ?>
				
				<?php 
					foreach ( $applied_improv as $field ) { ?>
					<div class="hire-us-part">
					<h2><?php echo $field['title']; ?></h2>
					<p><?php echo $field['description']; ?></p>
					</div>
					<?php
					}
					?></div>

				<div class="business-widget">
					
				</div>

				<?php the_content(); ?>
				</div>



			<?php endwhile; // End of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
