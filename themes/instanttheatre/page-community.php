<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'page' ); ?>
        <div class="our-community">
          <div class="quote-entry">
            <p><?php echo CFS() -> get ('entry_quote'); ?></p>
            <p><?php echo CFS() -> get ('author_of_quote'); ?></p>
          </div>
          <p><?php echo CFS() -> get ('our_community'); ?></p>
        </div>

      <?php endwhile; // End of the loop. ?>

<div class="community-gallery-images">
<?php 
$venues = CFS()->get( 'featured_venue_images' );
foreach ( $venues as $venue ) :?>
  <div class="community-gallery">
    <?php echo '<img src=" ' . $venue['image'] . '">'; ?>
  </div>
<?php endforeach; ?> 
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>