<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); 
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php /*Get page slug */ ?>
		<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

		<div class="archive-title-wrapper">
			<h1><?php echo $term->name; ?></h1>
		</div>

		<?php
			$term_id = 2;
			$taxonomy_name = 'role';
			$termchildren = get_term_children( $term_id, $taxonomy_name );
			echo '<ul>';
			echo '<li style="display: inline-block;">All</li>';
			foreach ( $termchildren as $child ) {
					$term = get_term_by( 'id', $child, $taxonomy_name );
					echo '<li style="display: inline-block;">'.$term->name.'</li>';
			}
			echo '</ul>';
		?> 


		<section class="person-gallery">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<div class="person-tile" ?>
					<a href="">
						<div class="person-image-wrapper">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
						</div>
						<?php the_title( '<p class="person-tile-label">', '</p>' ); ?>
					</a>
				</div><!-- #post-## -->

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
