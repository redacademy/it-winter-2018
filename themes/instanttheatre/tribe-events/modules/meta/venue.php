<?php
/**
 * Single Event Meta (Venue) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/venue.php
 *
 * @package TribeEventsCalendar
 */

if ( ! tribe_get_venue_id() ) {
	return;
}

$phone   = tribe_get_phone();
$website = tribe_get_venue_website_link();

?>

<div class="tribe-events-meta-group tribe-events-meta-group-venue">
	
	<dl>
		<?php do_action( 'tribe_events_single_meta_venue_section_start' ) ?>

		<dd class="tribe-venue"> 
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icons/show-details/Location.svg" alt="location logo" class="show-meta-logo">
			<?php if ( tribe_address_exists() ) : ?>
				<address class="tribe-events-address">
        <?php echo tribe_get_venue() ?>,
          <?php echo tribe_get_full_address(); ?>

        </address>
      <?php else : ?>
      <address class="tribe-events-address">
        <?php echo tribe_get_venue() ?>
        </address>
			<?php endif; ?>
		</dd>

		<?php if ( ! empty( $phone ) ): ?>
			<dt> <?php esc_html_e( 'Phone:', 'the-events-calendar' ) ?> </dt>
			<dd class="tribe-venue-tel"> <?php echo $phone ?> </dd>
		<?php endif ?>

		<?php if ( ! empty( $website ) ): ?>
			<dt> <?php esc_html_e( '', 'the-events-calendar' ) ?> </dt>
			<dd class="url"> 
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icons/show-details/Website.svg" alt="website logo" class="show-meta-logo">
        <?php echo $website ?> 
      </dd>
    <?php endif ?>
    
    <div class="events-tags">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icons/show-details/Tag.svg" alt="tag logo" class="show-meta-logo"><?php echo tribe_meta_event_tags( sprintf( esc_html__( ' ', 'the-events-calendar' ), tribe_get_event_label_singular() ), ' ', false ) ?>
    </div>

		<?php do_action( 'tribe_events_single_meta_venue_section_end' ) ?>
	</dl>
</div>
