<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1>Shows</h1>

			<?php if ( is_active_sidebar( 'shows-calendar' ) ) : ?>
				<div id="calendar-area" class="shows-calendar-area widget-area" role="complementary">
					<div class="mobile-filter-area">
						<h2>Filter by:</h2>
						<button class="mobile-filter-button date">Date</button>
						<button class="mobile-filter-button genre">Genre</button>
					</div><!-- end of mobile-filter-area -->

					<div class="mobile-shows-calendar-date-area">
						<div class="close-row">
							<button class="close-button"><i class="fa fa-times"></i></button>
						</div>
						<p>Select a date:</p>
						<?php dynamic_sidebar( 'shows-calendar' ); ?>
					</div><!-- end of mobile-shows-calendar-date-area -->

					<div class="shows-calendar-date-area">
						<h3>Select a Date:</h3>
						<?php dynamic_sidebar( 'shows-calendar' ); ?>
					</div><!-- end of shows-calendar-date-area -->

					<div class="shows-taxonomy-filter-area">

						<div class="close-row">
							<button class="close-button"><i class="fa fa-times"></i></button>
						</div>

						<?php 
							$terms = get_terms( array (
								'taxonomy' => 'show_genre',
								'hide_empty' => 0,
							));

							if ( !empty($terms) ) :
						?>
								<div class="filter-shows-group">
									<h3>Genres:</h3>
									<div class="genre-buttons">
									<?php foreach ( $terms as $term ) : ?>
										<button class="filter-btn" data-filter=".<?php echo $term->slug; ?>">
											<?php echo $term->name; ?>
										</button>
									<?php endforeach; ?>
									</div><!-- genre-buttons -->
									<div class="show-all-container">
										<button class="filter-btn selected show-all-button" data-filter="*">Show All</button>
									</div>
									<div class="done-area">
										<button class="done-button">Done</button>
									</div>
								</div><!-- end of filter-button-group -->
							
					
							<?php endif; ?>

					</div><!-- end of shows-taxonomy-filter-area -->
				</div><!-- #calendar-area -->
			<?php endif; ?>


			<?php
					// WP_Query arguments
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					$args = array(
						'post_type'              => 'tribe_events',
						'order'                  => 'ASC',
						'paged'									 => $paged,
						'tax_query' => array(
							array(
								'taxonomy' => 'tribe_events_cat',
								'field'    => 'slug',
								'terms'    => 'shows',
							),
						),
					); ?>

					<?php $show_query = new WP_Query( $args ); ?>

					<ul class="tribe-events-grid-view show-events-page">
					<?php if ( $show_query->have_posts() ) { ?>
						<?php 
						while ( $show_query->have_posts() ) { ?>
				
								<?php $show_query->the_post(); ?>
								
								<!-- grabbing genres associated with show to add to div class for isotope -->
								<?php 
									$show_genres = get_the_terms( $post->ID, 'show_genre' );
									$genre_list = '';
									foreach ( $show_genres as $genre) {
										$genre_list .= $genre->slug . ' ';
									}
								?>

								<li class="show-item <?php echo $genre_list; ?>">
								<?php 
								$thumb = ( has_post_thumbnail( $post->ID ) ) ? get_the_post_thumbnail( $post->ID, 'large' ) : '<img src="' . esc_url( trailingslashit( Tribe__Events__Pro__Main::instance()->pluginUrl ) . 'src/resources/images/tribe-related-events-placeholder.png' ) . '" alt="' . esc_attr( get_the_title( $post->ID ) ) . '" />';
								?>
								<div class="tribe-events-grid-thumbnail">
									<a href="<?php echo esc_url( tribe_get_event_link( $post ) ); ?>" class="url" rel="bookmark"><?php echo $thumb ?></a>
								</div>
								<h3 class="tribe-related-events-title"><?php the_title(); ?></h3>
								<div class="related-events-time-info">
								<?php 
								if ( $post->post_type == Tribe__Events__Main::POSTTYPE ) { ?>
									<p><?php echo tribe_get_start_date( $post, true, 'l, F j' ); ?></p>
									<p><?php echo tribe_get_start_date( $post, true, 'h:i A' ); ?></p>
								</div>
								<div class="related-events-venue-info">
								<?php }
								echo tribe_get_venue( $post ) . ' | ' . tribe_get_formatted_cost( $post );
								?>
								</div>

								<div class="related-events-links">
        					<a href="<?php echo tribe_get_event_website_url( $post ); ?>" class="buy-tickets-button">Buy Tickets</a>
        					<a href="<?php echo tribe_get_event_link( $post ); ?>" class="learn-more-link" rel="bookmark">Learn More</a>
      					</div>
							</li>
							<?php 
						} ?>
						</ul>
						<?php 

						previous_posts_link( ' << Newer Entries ' );
						next_posts_link( ' Older Entries >> ', $show_query->max_num_pages);

					} else {
						// no posts found
					} ?>

					<?php
					// Restore original Post Data
					wp_reset_postdata();
				?>

      
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
