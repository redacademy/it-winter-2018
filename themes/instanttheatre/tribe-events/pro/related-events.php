<?php
/**
 * Related Events Template
 * The template for displaying related events on the single event page.
 *
 * You can recreate an ENTIRELY new related events view by doing a template override, and placing
 * a related-events.php file in a tribe-events/pro/ directory within your theme directory, which
 * will override the /views/pro/related-events.php.
 *
 * You can use any or all filters included in this file or create your own filters in
 * your functions.php. In order to modify or extend a single filter, please see our
 * readme on templates hooks and filters
 *
 * @package TribeEventsCalendarPro
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$posts = tribe_get_related_posts();

if ( is_array( $posts ) && ! empty( $posts ) ) : ?>

<h3 class="tribe-events-related-events-title"><?php printf( __( 'Suggested %s', 'tribe-events-calendar-pro' ), tribe_get_event_label_plural() ); ?></h3>

<ul class="tribe-events-grid-view tribe-clearfix">
	<?php foreach ( $posts as $post ) : ?>
	<li>
		<?php $thumb = ( has_post_thumbnail( $post->ID ) ) ? get_the_post_thumbnail( $post->ID, 'large' ) : '<img src="' . esc_url( trailingslashit( Tribe__Events__Pro__Main::instance()->pluginUrl ) . 'src/resources/images/tribe-related-events-placeholder.png' ) . '" alt="' . esc_attr( get_the_title( $post->ID ) ) . '" />'; ?>
		<div class="tribe-events-grid-thumbnail">
			<a href="<?php echo esc_url( tribe_get_event_link( $post ) ); ?>" class="url" rel="bookmark"><?php echo $thumb ?></a>
		</div>
		<div class="tribe-related-event-info">
      <h3 class="tribe-related-events-title"><a href="<?php echo esc_url( tribe_get_event_link( $post ) ); ?>" class="tribe-event-url" rel="bookmark"><?php echo esc_html( get_the_title( $post->ID ) ); ?></a></h3>
      <div class="related-events-time-info">
			<?php
				if ( $post->post_type == Tribe__Events__Main::POSTTYPE ) { ?>
          <p><?php echo esc_html( tribe_get_start_date( $post, true, 'l, F j' ) ); ?></p>
          <p><?php echo esc_html( tribe_get_start_date( $post, true, 'h:i A' ) ); ?></p>
      </div>
      <div class="related-events-venue-info">
        <?php echo esc_html( tribe_get_venue( $post ) ) . ' | ' . esc_html( tribe_get_formatted_cost( $post ) ); ?>
      </div>
      <?php
				}
      ?>
      <div class="related-events-links">
        <a href="<?php echo esc_url( tribe_get_event_website_url( $post ) ); ?>" class="buy-tickets-button">Buy Tickets</a>
        <a href="<?php echo esc_url( tribe_get_event_link( $post ) ); ?>" class="learn-more-link" rel="bookmark">Learn More</a>
      </div>
		</div>
	</li>
	<?php endforeach; ?>
</ul>
<?php
endif;
