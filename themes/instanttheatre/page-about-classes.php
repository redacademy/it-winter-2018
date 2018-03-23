<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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
							<img class="item-logo" src="<?php echo get_template_directory_uri() . '/assets/logo/rocket/rocket-' . $term->slug; ?>.svg" alt="<?php echo $term->name . ' category'; ?>"/>
							<span class="featured"><?php echo $term->slug; ?></span>
							<p><?php echo $term->description; ?></p>
							<a class="blue-btn" href="<?php echo get_permalink( get_page_by_path( 'list-of-classes' ) ) . '#' . $term->slug; ?>">See Classes</a>
						</div>
					<?php	endforeach; wp_reset_postdata(); ?>
				</div>
			</section>
		</div>

		<!-- Why Take Classes At Instant -->
		<section class="why-take-classes">
			<h1>Why Classes at Instant?</h1>
			<div class="content-panel">
				<div class="panel-image">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/why-take-classes1.jpg" alt="Improv class scene"'?>"/>
				</div>
				<div>
					<p>Our classes have the power to change lives. As a professional actor they can level up your craft. As a comedian you’ll learn where the funny is and to tell great stories. Within your business you’ll have the confidence and presence to succeed. All of our classes are fun and teach you the rules and how to break them. Why take our classes? Because why wouldn’t you want to spend your life laughing?</p>
					<p>Instant theatre has decades of experience providing great training in Vancouver and across Canada. We teach a wide range of performance skills from Improv to Sketch to Clown and Acting for the Camera. We enjoy visits from exclusive guest instructors all the time and love to create new programs.</p>
				</div>
			</div>

			<div class="content-panel">
				<div class="panel-image">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/why-take-classes2.jpg" alt="Bright and open studio space with hardwood floors and wood panelling on the walls"'?>"/>
				</div>
				<div>
					<p>Our purpose built training centre, Instant Studios, feels like a creative space. It is warm and welcoming and features two studios, a writers room, and a lounge. We are located in the heart of Mount Pleasant close to transit and great coffee.</p>
					<p>Instant Theatre has always been dedicated to its students and to a belief that access to classes should be cheap and easy. We want you to take a journey with us and realize your potential as an improviser. This takes time and commitment. By taking either our Intro Class, Advanced Classes, or joining an ensemble in our Conservatory program, you will not only enjoy learning improvisational skills but also become a part of our community. Join us!</p>
				</div>
			</div>
		</section>

		<!-- Testimonials -->
		<div class="testimonial-widget">
			<div class="testimonial-grid">
				<h1>Testimonials</h1>
				<div class="testimonial-carousel-container">
				<?php $testimonials = CFS()->get( 'testimonials', get_page_by_path('hire-us')->ID); ?>
				<?php foreach ( $testimonials as $testimonial ) : ?>
					<div class="testimonial-grid-part">
						<img src="<?php echo $testimonial['image'] ?>">
						<div class="testimonial-description">
							<p><?php echo $testimonial['testimonial']; ?></p>
							<span class="testimonial-source">
								<p><?php echo $testimonial['author']; ?></p>, 
								<?php echo $testimonial['authors_position']; ?>
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
						<img src="<?php echo $photo['photo'] ?>">
					</div>
				<?php endforeach; ?>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>