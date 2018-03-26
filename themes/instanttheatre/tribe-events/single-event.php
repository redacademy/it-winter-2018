<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.3
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

<div id="tribe-events-content" class="tribe-events-single">

	<!-- <p class="tribe-events-back">
		<a href="<?php echo esc_url( tribe_get_events_link() ); ?>"> <?php printf( '&laquo; ' . esc_html_x( 'All %s', '%s Events plural label', 'the-events-calendar' ), $events_label_plural ); ?></a>
	</p> -->

	<!-- Notices -->
	<?php tribe_the_notices() ?>

	<?php the_title( '<h1 class="tribe-events-single-event-title">', '</h1>' ); ?>

	<p class="single-event-description">
	<?php 
		$event_description = esc_html( CFS()->get('event_description') );
		echo $event_description;
	?>
	</p>


	<!-- Event header -->
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>
		<!-- Navigation -->
		<h3 class="tribe-events-visuallyhidden"><?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?></h3>
		<ul class="tribe-events-sub-nav">
			<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
			<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
		</ul>
		<!-- .tribe-events-sub-nav -->
	</div>
	<!-- #tribe-events-header -->

  <?php while ( have_posts() ) :  the_post(); ?>
  
  <!-- Event featured image, but exclude link -->
  <?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<div class="show-page-container">
				<!-- Buy Tickets button to link to eventbrite page -->
				<div class="buy-tickets-link-wrapper desktop-view-hidden">
					<a href="<?php echo esc_url( tribe_get_event_website_url() ); ?>" class="buy-tickets-button">Buy Tickets</a>
				</div>

				<!-- Event content -->
				<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
				<div class="tribe-events-single-event-description tribe-events-content">
					<?php the_content(); ?>
				</div>

				<!-- using this to grab website url to pass to jquery to create the social media share links -->
				<div class="website-url-for-javascript-hidden"><?php echo esc_url( tribe_get_event_website_url() ); ?></div>
				<h3>Share</h3>
				<ul class="social-media-share-links">
					<li class="social-share facebook"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icons/Share/Facebook.svg" alt="Share Page on Facebook" /></li>
					<li class="social-share twitter"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icons/Share/Twitter.svg" alt="Share Page on Twitter" /></li>
				</ul>


				<!-- .tribe-events-single-event-description -->
				<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>

				<!-- Event meta -->
				<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
				<?php tribe_get_template_part( 'modules/meta' ); ?>
				<h3>Cast</h3>
				<div class="show-cast-container">
					<?php
						$actors = CFS()->get( 'people' ); ?>
					<?php if (isset($actors)) : ?>
						<?php foreach( $actors as $post_id ) : ?>
							<div id="post-<?php echo $post_id; ?>" class="show-cast-item">
								<?php $the_post = get_post( $post_id ); ?>
								<?php echo get_the_post_thumbnail( $the_post->ID ); ?>
								<p><?php echo esc_html( $the_post->post_title ); ?></p>
							</div><!-- show-cast-item -->
						<?php endforeach; ?>
					<?php endif; ?>
				</div><!-- show-cast-container -->
			</div>
			<div class="mobile-view-hidden">
					<?php tribe_get_template_part( 'modules/meta' ); ?>
			</div>

			<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
		</div> <!-- #post-x -->
		<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>

</div><!-- #tribe-events-content -->

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