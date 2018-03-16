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

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
<!-- ///////////////hardcoding /////////////////////-->
			<div class="carousel-cell"></div>
			<h1>upcoming shows</h1>
			<div class="upcoming-shows">
				<div class="show-wrapper">
					<div class="thumbnail"></div>
				</div>
				<div class="show-wrapper">
					<div class="thumbnail"></div>
				</div>
				<div class="show-wrapper">
					<div class="thumbnail"></div>
				</div>
			</div>
			<h1>upcoming classes</h1>
				<div class="upcoming-classes">
				<div class="class-wrapper">
					<div class="thumbnail"></div>
				</div>
				<div class="class-wrapper">
					<div class="thumbnail"></div>
				</div>
				<div class="class-wrapper">
					<div class="thumbnail"></div>
				</div>
				</div>

			<div class="what-is-improv">
				<div class="what-is-improv-containor">
					<h2>what is improv?</h2>
					<p>Improvisation, or improv, is a form of live theatre in which the plot, characters, and dialogue of a game, scene, or story are made up in the moment. Often improvisers will take a suggestion from the audience, or draw on some other source of inspiration to get started. Improv is unique in that if you see a performance, that’s it… there will never be another show exactly like it ever done again. Improv is different every time.</p>
					<a href="#">Learn More About Our Approach</a>
					<h2>improv for bussiness</h2>
					<p>If you’ve got improv business needs, we have a full range of solutions.</p>
					<div class="improv-button-set">
					<button class="blue-btn">hire us</button>
					<button class="blue-btn">event booking</button>
					<button class="blue-btn">studio rental</button>					
				</div>
				</div>
			</div>
			
			<section class="instagram-carousel">
				<h1>instagram</h1>
			<div id="instagram-feed" class="instagram-feed"  >
				<div class="cell"></div>
				<div class="cell"></div>
				<div class="cell"></div>
				<div class="cell"></div>
			</div>
</section>


<!-- ///////////////hardcoding /////////////////////-->
			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
