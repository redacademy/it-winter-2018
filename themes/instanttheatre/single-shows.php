<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

	<!-- Returning the link to the event brite page and grabbing the page ID to use for the loop -->
	<?php 
			$showPost = get_post();?>
			<!-- <pre><?php print_r($showPost); ?></pre> -->
			<?php $eventURL = CFS()->get( 'eventbrite_url' ); 
			$eventURL = preg_match("/[0-9]+[^-]+$/", $eventURL, $outputID);
			$showID = $outputID[0];
		?><br>
	<?php 
	$event = eventbrite_get_event( $showID );?>
	<pre><?php print_r($event); ?></pre>

	<br><br>
	<img src="<?php echo $event->events[0]->logo_url ?>" alt="Show Logo">
	<h1><?php echo $showPost->post_title; ?></h1>
	<p><?php echo CFS()->get( 'description' ); ?></p>
	<p><strong>TIME: </strong> <?php echo $event->events[0]->start->local ?> - <?php echo $event->events[0]->end->local ?></p>
	<p><strong>VENUE: </strong><?php echo $event->events[0]->venue->address->localized_address_display; ?></p>
	<p><strong>AVAILABILITY: </strong><?php echo $event->events[0]->tickets[0]->on_sale_status; ?> </p>
	<p><strong>TICKET PRICE: </strong><?php echo $event->events[0]->tickets[0]->cost->major_value; ?> </p>
	<p><a href=" <?php echo CFS()->get( 'eventbrite_url' ); ?> ">GET TICKETS</a></p>
	<p><strong>ACTORS: </strong> <?php $values = CFS()->get( 'actors' );
	foreach ( $values as $post_id ) {
		$the_post = get_post( $post_id );
		echo $the_post->post_title;
		}		
	
	?>
	</p>
	<?php endwhile; ?>
	<!-- end of the loop -->


<?php wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>