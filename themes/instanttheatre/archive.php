<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
<div class="shows-grid">
<ul class="tribe-events-grid-view show-events-page">

			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<li class="show-item">

	<div class="tribe-events-grid-thumbnail">
		<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'large' ) ?>
		<?php endif; ?>
		</div>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>


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

</article><!-- #post-## -->
			<?php endwhile; ?>
</ul>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
