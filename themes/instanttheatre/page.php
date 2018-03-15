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

			<?php endwhile; // End of the loop. ?>

			 <script src ="https://form.jotform.com/static/feedback2.js" type="text/javascript"></script><script type="text/javascript"> var JFL_80118057984260 = new JotformFeedback({ formId: '80118057984260', base: 'https://form.jotform.com/', windowTitle: 'Studio Booking Enquiry', background: '#FFA500', fontColor: '#FFFFFF', type: 'false', height: 500, width: 700, openOnLoad: false }); </script> <a class="btn lightbox-80118057984260" style="margin-top: 16px"> Studio Booking Enquiry </a>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
