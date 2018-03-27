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
					<img src="<?php echo esc_url( CFS()->get( 'our_story_image' )); ?>">
						<div class="our-story-text">
							<?php echo esc_html(CFS() ->get( 'our_story' ) );?>
						</div>
					</div>

				<?php endwhile; // End of the loop. ?>

				<h1>our school director</h1>
				<img src="<?php echo esc_url( CFS()->get('school_director') );?>"class="nikolai-pic">
				<p>nikolai witschl</p>
				<div class="nikolai-experience">
					<div class="improv-experience">
						<h2>improv experience</h2>
						<?php echo esc_html( CFS() -> get ( 'improv_experience' ) ); ?>
					</div>
					<div class="acting-experience">
						<h2>acting experience</h2>
						<?php echo esc_html( CFS() -> get ( 'acting_experience' ) ); ?>
					</div>
				</div>

				<a href="http://www.imdb.com/name/nm5775621/"><button id="imdb-button"class="blue-btn">imdb page</button></a>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
