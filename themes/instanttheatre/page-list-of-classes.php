<?php
/**
 * Page Template: List of Classes
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area list-of-classes">
		<main id="main" class="site-main" role="main">
			<header class="page-header">
				<h1 class='main-heading'>List of Classes</h1>
				<ul class="view-switch">
					<li id="list-view" class= "selected">List View</li>
					<li id="calendar-view">Calendar View</li>
				</ul>
			</header>
			<div id="class-calendar">
				<?php echo do_shortcode('[tribe_events view="month" category="classes tribe-bar="false""]'); ?>
			</div>

			<!-- Retrieve terms from class_type taxonomy -->
			<?php
				$args = array(
									'taxonomy' => 'class_type',
									'hide_empty' => 0
									);
				$terms = get_terms( $args );
				usort( $terms, function($a, $b) { //Sort value 'Other' to last position of term array
					return (($a < $b) && $a !== 'other') ? -1 : 1;
				});
			?>

			<!-- Output schedule for each class type -->
			<!-- Section header -->
			<section id="class-list">
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
					
					<!-- Fetch posts for each class type -->
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
					<?php $classes = new WP_Query( $args ); ?>

					<!-- Output class schedule table -->
					<?php if ( $classes->have_posts() ) : ?>
						<ul id="<?php echo $term->slug ?>" class="class-schedule">
							<li>
								<p class="cell">Class</p>
								<p class="cell">Date</p>
								<p class="cell">Time</p>
								<p class="cell">Prerequisite</p>
								<p class="cell">Instructor</p>
								<p class="cell">Price</p>
								<p class="cell">Register</p>
							</li>
							<!-- Output classes into table -->
							<?php while ( $classes->have_posts() ) : $classes->the_post(); ?>
							<?php 
								//Retrieve class info in Events Calendar Pro
								$event_date = tribe_get_start_date( $post->ID, false, 'D, M  jS', null );
								$event_start_time = tribe_get_start_time( $post->ID, 'g:iA' );
								$event_end_time = tribe_get_end_time( $post->ID, 'g:iA' );
								$event_cost = tribe_get_cost( $post->ID );
							?>
							<?php 
								//Retrieve class info from Custom Field Suite
								$prerequisite = CFS()->get('prerequisite', false );
								$instructors = CFS()->get( 'people' );
							?>
								<li>
									<!-- Title -->
									<p class="cell"><?php echo $post->post_title; ?></p>
									<!-- Date -->
									<p class="cell"><?php echo $event_date; ?></p>
									<!-- Start/End Time -->
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
									<!-- Prerequisite -->
									<p class="cell"><?php echo $prerequisite; ?></p>
									<!-- Instructor -->
									<div class="cell">
										<?php if ( isset($instructors) ) : ?>
											<?php foreach( $instructors as $post_id ) : ?>
												<?php $instructor = get_post( $post_id ); ?>
												<?php echo '<div>' . $instructor->post_title . '</div>'; ?>
											<?php endforeach; ?>
										<?php endif; ?>
									</div>
									<!-- Price -->
									<p class="cell"><?php echo $event_cost; ?></p>
									<!-- Link to class page -->
									<a class="blue-btn cell" href="<?php echo get_page_link(); ?>" target="_blank">Class Details</a>
								</li>
							<?php endwhile; ?>	
						</ul>
					
					<?php else: ?>
						<!-- If no classes found -->
						<p class="no-classes">No classes scheduled</p>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				<?php endforeach; wp_reset_postdata(); ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>