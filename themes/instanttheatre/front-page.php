<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

<!-- ///////////////banner /////////////////////-->
		<div class="banner-carousel">

			<?php		$fields = CFS()->get( 'banner_loop' );
			foreach ( $fields as $field ) {
	
				$keys = array_keys($field['title_link']);
				$values = array_values($field['title_link']);

				?>
				<div class="banner-cell" >
				<div class="banner-thumbnail">
					<?php
					echo '<a href="'.$values[0].'" target="'.$values[2].'">'.'<img src="' . $field['banner_image']. '" alt="Banner Image">'.'</a>';
					?>
		
				</div>
				<div class="banner-text-info">
					<?php
					echo '<h2><a href="'.$values[0].'" target="'.$values[2].'"> '. $values[1]. '</a></h2>';
		
					echo $field['banner_info'];
					?>
					<div class='button-wrapper'>
						<button class="buy-tickets-button"><?php echo $field[ 'eb_link' ]; ?></button>
						<?php
						echo '<a href="'.$values[0].'" target="'.$values[2].'" class="learn-more-link" >learn more</a>';
						?>
					</div>
				</div>
			</div>
		
			<?php
			}   // end foreach /////////////////////////////////////////////////
			?>

		</div><!-- banner-caroucell -->


<!-- ///////////////////////////shows///////////////////////// -->
		<h1>upcoming shows</h1>

		<!-- // Grab the 3 next events (by categroies) -->
		<div class="shows-grid">

		<?php $events = array(
				'post_type' => 'tribe_events',
				'eventDisplay'   => 'list',
				'posts_per_page' => 3,
				'tax_query'=> array(
					array(
							'taxonomy' => 'tribe_events_cat',
							'field' => 'slug',
							'terms' => 'shows'
					)
			)
		);
		?>
		
		<?php $shows = new WP_Query( $events ); /* $args set above*/ ?>
		
		<ul class="tribe-events-grid-view show-events-page">
		
			<?php if ( $shows->have_posts() ) : ?>
		
			<?php while ( $shows->have_posts() ) : $shows->the_post(); ?>
		
			<li class="show-item">
		
				<div class="tribe-events-grid-thumbnail">
		
			 		<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</div>
		
				<h3 class="tribe-related-events-title"><?php the_title(); ?></h3>
				<div class="related-events-time-info">
					<p><?php echo tribe_get_start_date( $post, true, 'l, F j' ); ?></p>
					<p><?php echo tribe_get_start_date( $post, true, 'h:i A' ); ?></p>
				</div>

				<div class="related-events-venue-info">
					<?php echo tribe_get_venue() . ' | ' . tribe_get_formatted_cost();?>
				</div>

				<div class="related-events-links">
					<a href="<?php echo tribe_get_event_website_url( $post ); ?>" class="buy-tickets-button">Buy Tickets</a>
					<a href="<?php echo tribe_get_event_link( $post ); ?>" class="learn-more-link" rel="bookmark">Learn More</a>
				</div>

			</li>
		
			<?php endwhile; ?>
		</ul>
		
		<?php the_posts_navigation(); ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<h2>Nothing found!</h2>
		<?php endif; ?>
		
		</div>

		<div class="front-page-links">
		<a href="<?php echo get_site_url()?>/show-list/" class="browse-more-link"><span>browse more shows</span> <i class="fa fa-chevron-right"></i></a>
		</div>
			
		<!-- // Grab the 5 next "party" events (by tag) -->

		<h1>upcoming classes</h1>

		<div class="shows-grid">

		<?php $class_events = array(
				'post_type' => 'tribe_events',
				'eventDisplay'   => 'list',
				'posts_per_page' => 3,
				'tax_query'=> array(
					array(
							'taxonomy' => 'tribe_events_cat',
							'field' => 'slug',
							'terms' => 'classes'
					)
			)
		);
		?>
		
		
		<?php $classes = new WP_Query( $class_events ); /* $args set above*/ ?>
		
		<ul class="tribe-events-grid-view show-events-page">
		
		<?php if ( $classes->have_posts() ) : ?>
		
			 <?php while ( $classes->have_posts() ) : $classes->the_post(); ?>
		
			 <li class="show-item">
		
			 <div class="tribe-events-grid-thumbnail">
		
			 <?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
						</div>
		
					
					<h3 class="tribe-related-events-title"><?php the_title(); ?></h3>
					<div class="related-events-time-info">
					<p><?php echo tribe_get_start_date( $post, true, 'l, F j' ); ?></p>
						 <p><?php echo tribe_get_start_date( $post, true, 'h:i A' ); ?></p>
		</div>
		<div class="related-events-venue-info">
						 <?php	
				echo tribe_get_venue() . ' | ' . tribe_get_formatted_cost();
		?>
		</div>
		<div class="related-events-links">
				<a href="<?php echo tribe_get_event_website_url( $post ); ?>" class="buy-tickets-button">Buy Tickets</a>
					 <a href="<?php echo tribe_get_event_link( $post ); ?>" class="learn-more-link" rel="bookmark">Learn More</a>
					 </div>
		</li>
		
			 <?php endwhile; ?>
		</ul>
		
		<?php the_posts_navigation(); ?>
			 <?php wp_reset_postdata(); ?>
		<?php else : ?>
					<h2>Nothing found!</h2>
		<?php endif; ?>
	</div>
		
		<div class="front-page-links">
		
		<a href="<?php echo get_site_url()?>/classes/" class="browse-more-link">browse more classes <i class="fa fa-chevron-right"></i></a>
		
		</div>





<!--/////////////////////// whats improv////////////////////////////// -->
			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		<section class="instagram-carousel">
				<h1>instagram</h1>
			<div id="instagram-feed" class="instagram-feed"></div>
			<div class="front-page-links"><a class="front-page-links" href="https://www.instagram.com/instanttheatre/">view on instagram <i class="fa fa-chevron-right"></i></a>
		</div>
		</section>




	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
