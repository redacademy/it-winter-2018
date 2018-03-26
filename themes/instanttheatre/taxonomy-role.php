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
				<h1><?php echo esc_html( $term->name ); ?></h1>
			</div>

			<?php
				$term_id = $term->term_id;
				$taxonomy_name = 'role';
				$termchildren = get_term_children( $term_id, $taxonomy_name );
			?> 
		
			<div class="filter-button-group">
				<button class="filter-btn selected" data-filter="*">All</button>
				<?php foreach ( $termchildren as $child ) : ?>
					<?php $term = get_term_by( 'id', $child, $taxonomy_name ); ?>
					<button class="filter-btn" data-filter=".role-<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></button>
				<?php endforeach; ?>
			</div>


			<section class="person-gallery">	

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php $post_classes = implode(" ", get_post_class() ); ?>

						<div id="post-<?php the_ID(); ?>" class="<?php echo esc_attr( $post_classes ); ?> person-tile">
							<a href="">
								<div class="person-image-wrapper">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'small' ); ?>
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

<div class="overlay">
	<div class="overlay-content">
		<div class="close-link">
			<i class="fa fa-times fa-2x"></i>
		</div>
		<span class="person-title"></span>
		<div class="portrait-wrapper">
			<img id="portrait" src="" alt="">
		</div>
		<div class="social-links">
			<a class="social-facebook" href="" target="_blank">
				<i class="fa fa-facebook-square fa-2x"></i>
			</a>
			<a class="social-twitter" href="" target="_blank">
				<i class="fa fa-twitter fa-2x"></i>
			</a>
			<a class="social-instagram" href="" target="_blank">
				<i class="fa fa-instagram fa-2x"></i>
			</a>
		</div>
		<p class="person-description"></p>
</div>
