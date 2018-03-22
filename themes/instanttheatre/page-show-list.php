<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<?php echo do_shortcode('[tribe_events view="month"]') ?>

			<div class="shows-grid">

			<?php
					// WP_Query arguments
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					$args = array(
						'post_type'              => 'tribe_events',
						'posts_per_page'         => '9',
						'order'                  => 'DESC',
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

					<ul class="tribe-events-grid-view">
					<?php if ( $show_query->have_posts() ) { ?>
						<?php 
						while ( $show_query->have_posts() ) { ?>
							<li>
								<?php $show_query->the_post(); ?>
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
				</div>

      
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
