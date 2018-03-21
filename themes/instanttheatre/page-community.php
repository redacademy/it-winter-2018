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
      <div class="havana-theatre">
        <h1>havana theatre</h1>
        <p>Located right in the heart of Vancouver’s famous Commercial Drive (1212 Commercial Drive), Havana offers a professional theatre space nestled in the back of a fantastic Cuban restaurant. Offering dinner, drinks, and a show, Havana is the ideal location for a night out on the town. With an award-winning kitchen and fantastic patio, Instant is proud to compliment your evening with our Sunday night performances.</p>
      </div>

      <!-- cfs get in variable - foreach -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
