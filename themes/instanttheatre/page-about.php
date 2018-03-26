<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="about-us-page">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<div class="our-story">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/other-images/Our Story Image.jpg">
						<div class="our-story-text">
							<?php echo CFS() ->get( 'our_story' );?>
						</div>
					</div>

				<?php endwhile; // End of the loop. ?>

				<h1>our school director</h1>
				<img src="<?php echo get_template_directory_uri();?>/assets/images/nikolai_witschl_headshot_small_square-e1502153164354.jpg"class="nikolai-pic">
				<p>nikolai witschl</p>
				<div class="nikolai-experience">
					<div class="improv-experience">
						<h2>improv experience</h2>
						<?php echo CFS() -> get ( 'improv_experience' ); ?>
					</div>
					<div class="acting-experience">
						<h2>acting experience</h2>
						<?php echo CFS() -> get ( 'acting_experience' ); ?>
					</div>
				</div>

				<a href="http://www.imdb.com/name/nm5775621/"><button id="imdb-button"class="blue-btn">imdb page</button></a>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
