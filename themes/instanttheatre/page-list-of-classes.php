<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area list-of-classes">
		<main id="main" class="site-main" role="main">
			<header class="page-header">
				<h1 class='main-heading'>List of Classes</h1>
				<ul>
					<li>List View</li>
					<li>Calendar View</li>
				</ul>
			</header>

			<?php /* Retrieve Class Type Loop */ ?>
			<?php
				$args = array(
									'taxonomy' => 'class_type',
									'hide_empty' => 0
									);
				$terms = get_terms( $args );
				usort( $terms, function($a, $b) {
					return (($a < $b) && $a !== 'other') ? -1 : 1;
				});
			?>
			<?php foreach ( $terms as $term ) : ?>
				<div class="schedule-header">
					<div class="schedule-header-logo">
						<img src="<?php echo get_template_directory_uri() . '/assets/logo/rocket/rocket-' . $term->slug; ?>.svg" alt="<?php echo $term->name . ' category'; ?>"/>
						<h2 class="featured"><?php echo $term->slug; ?></h2>
					</div>
					<div class="schedule-header-text">
						<h2><?php echo $term->name; ?> Classes</h2>
						<p><?php echo $term->description; ?></p>
					</div>
				</div>
			
				<?php
					$args = array(
						'tax_query' => array(
								array(
										'taxonomy' => 'class_type',
										'field' => 'slug',
										'terms' => $term->slug
								)
						)
					);
				?>	

				<?php // The Query ?>
				<?php $classes = new WP_Query( $args ); ?>

				<?php // The Loop ?>
				<?php if ( $classes->have_posts() ) : ?>
					<ul class="class-schedule">
						<li>
							<p class="cell">Class</p>
							<p class="cell">Date</p>
							<p class="cell">Time</p>
							<p class="cell">Prerequisite</p>
							<p class="cell">Instructor</p>
							<p class="cell">Price</p>
							<p class="cell">Register</p>
						</li>
						<?php while ( $classes->have_posts() ) : $classes->the_post(); ?>
						<?php //Retrieve Events Calendar Pro data
							$event_day = tribe_get_start_date( $post->ID, false, 'D, M  jS', null );
							$event_start_time = tribe_get_start_time( $post->ID, 'g:iA' );
							$event_end_time = tribe_get_end_time( $post->ID, 'g:iA' );
							$event_cost = tribe_get_cost( $post->ID );
							$event_link = tribe_get_event_website_link( null, 'Class Details' );
						?>
						<?php //Retrieve Custom Fields data
							$prerequisite = CFS()->get('prerequisite', false );
							$instructors = get_posts (
								array(
									'post_type' => 'post_people',
									'post__in' => CFS()->get( 'instructor', false )
								)
							);
						?>
							<li>
								<p class="cell"><?php echo $post->post_title; ?></p>
								<p class="cell"><?php echo $event_day; ?></p>
								<p class="cell">
									<?php 
										if( $event_start_time !== $event_end_time ) {
											echo $event_start_time.' - '.$event_end_time;
										 }
										 else {
											echo $event_start_time;
										 } 
									?>
								</p>
								<p class="cell"><?php echo $prerequisite; ?></p>
								<div class="cell">
									<?php foreach( $instructors as $instructor) : ?>
									<?php echo '<div>' . $instructor->post_title . '</div>'; ?>
									<?php endforeach; ?>
								</div>
								<p class="cell"><?php echo $event_cost; ?></p>
								<?php echo $event_link; ?>
							</li>
						<?php endwhile; ?>	
					</ul>
				
				<?php else: ?>
					<p class="no-classes">No classes scheduled</p>
				<?php endif; ?>
			<?php
				// Restore original Post Data
				wp_reset_postdata();
			?>

			<?php endforeach; wp_reset_postdata(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>