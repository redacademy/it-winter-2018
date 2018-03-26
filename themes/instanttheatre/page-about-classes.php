<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main about-classes" role="main">

		<?php //Fetch class_type terms
			$args = array(
								'taxonomy' => 'class_type',
								'hide_empty' => 0
								);
			$terms = get_terms( $args );
			usort( $terms, function($a, $b) { //Sort array of terms alphabetically with value: Other in last position
				return (($a < $b) && $a !== 'other') ? -1 : 1;
			});
		?>

		<!-- What We Teach -->
		<div class="yellow-wave-panel">
			<section class="class-types">
				<h1>What We Teach</h1>
				<div class="class-type-gallery">
					<?php foreach ( $terms as $term ) : ?>
						<div class="gallery-item">
							<img class="item-logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo/rocket/rocket-' . $term->slug ); ?>.svg" alt="<?php echo $term->name . ' category'; ?>"/>
							<span class="featured"><?php echo esc_html( $term->slug ); ?></span>
							<p><?php echo esc_html( $term->description ); ?></p>
							<a class="blue-btn" href="<?php echo esc_url( get_permalink( get_page_by_path( 'list-of-classes' ) ) . '#' . $term->slug ); ?>">See Classes</a>
						</div>
					<?php	endforeach; wp_reset_postdata(); ?>
				</div>
			</section>
		</div>

		<!-- Why Take Classes At Instant -->
		<section class="why-take-classes">
			<h1>Why Classes at Instant?</h1>

				<?php $contents = CFS()->get( 'content_panel' ); ?>
				<?php if( isset( $contents ) ) : ?>
					<?php foreach ( $contents as $content ) : ?>
						<div class="content-panel">
							<div class="panel-image">
								<img src="<?php echo esc_url( $content['photo'] ); ?> "/>
							</div>
							<div>
								<?php echo wp_kses_post( $content['content'] ); ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>

		</section>

		<!-- Testimonials -->
		<div class="testimonial-widget">
			<div class="testimonial-grid">
				<h1>Testimonials</h1>
				<div class="testimonial-carousel-container">
				<?php $testimonials = CFS()->get( 'testimonials' ); ?>
				<?php foreach ( $testimonials as $testimonial ) : ?>
					<div class="testimonial-grid-part">
						<img src="<?php echo esc_url( $testimonial['image'] ); ?>">
						<div class="testimonial-description">
							<p><?php echo esc_html( $testimonial['testimonial'] ); ?></p>
							<span class="testimonial-source">
								<p><?php echo esc_html( $testimonial['author'] ); ?></p>, 
								<?php echo esc_html( $testimonial['authors_position'] ); ?>
							</span>
						</div>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>

		<!-- Photo Gallery -->
		<section class="photo-gallery">
			<h1>Photo Gallery</h1>
			<div class="photo-gallery-container">
				<?php $photos = CFS()->get( 'photo_gallery' ); ?>
				<?php foreach ( $photos as $photo ) : ?>
					<div class="gallery-item">
						<img src="<?php echo esc_url( $photo['photo'] ); ?>">
					</div>
				<?php endforeach; ?>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>