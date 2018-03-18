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
			$term_id = $term->term_id;
			$taxonomy_name = 'role';
			$termchildren = get_term_children( $term_id, $taxonomy_name );
		?> 
		
		<div class="filter-button-group">
			<button class="filter-btn selected" data-filter="*">All</button>
			<?php foreach ( $termchildren as $child ) : ?>
				<?php $term = get_term_by( 'id', $child, $taxonomy_name ); ?>
				<button class="filter-btn" data-filter=".role-<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
			<?php endforeach; ?>
		</div>


		<section class="person-gallery">	

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php $post_classes = implode(" ", get_post_class() ); ?>

					<div id="post-<?php the_ID(); ?>" class="<?php echo $post_classes; ?> person-tile">
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
	<!-- <div class="popout"> -->
			<div class="person-bio">
				<div class="portrait-wrapper">
					<img src="http://localhost/instant_theatre/wp-content/uploads/2018/03/download-1.jpg" alt="Person portait">
				</div>
				<div class="bio-content">
					<span class="person-title">Amanda HugnKiss</span>
					<div class="social-links">Social Links</div>
					<i class="fas fa-window-close link-close"></i>
					<div class="person-description">Some text about person</div>
				</div>

			</div>
	<!-- </div> -->

<?php get_footer(); ?>
