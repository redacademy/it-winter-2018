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
				<?php echo CFS() ->get( 'our_story' );?>

			<?php endwhile; // End of the loop. ?>

			<h3>our school director</h3>
			<img src="/assets/images/cast-images/nikolai_witschl_headshot_small_square-e1502153164354.jpg">
			<!-- <div class="nikolai-text">
				<h4>What is your improv and acting experience?</h4>
				<p>
				I believe that improv and acting share many of the same interconnected principles, which probably comes from the training I received in Edmonton, AB. I graduated from the BFA Acting program at the University of Alberta, while simultaneously being a cast member at Rapid Fire Theatre. After graduating I moved to Vancouver and began performing and teaching with Instant Theatre, which continues my improv career of 15+ years, where I perform in many of our weekly and monthly shows, including the Twilight Zone-esque Outer Middle Zone, and our modern take on the Bard, Shakespeare after Dark. I have also gotten work in many film and television projects, including Supernatural, Once Upon a Time, X-Files, Lucifer, Legends of Tomorrow, Supergirl (with Kevin Smith) and Guillermo Del Toro’s The Strain. 
				</p>
				<h4>What is your improv and acting experience?</h4>
				<p>
				I believe that improv and acting share many of the same interconnected principles, which probably comes from the training I received in Edmonton, AB. I graduated from the BFA Acting program at the University of Alberta, while simultaneously being a cast member at Rapid Fire Theatre. After graduating I moved to Vancouver and began performing and teaching with Instant Theatre, which continues my improv career of 15+ years, where I perform in many of our weekly and monthly shows, including the Twilight Zone-esque Outer Middle Zone, and our modern take on the Bard, Shakespeare after Dark. I have also gotten work in many film and television projects, including Supernatural, Once Upon a Time, X-Files, Lucifer, Legends of Tomorrow, Supergirl (with Kevin Smith) and Guillermo Del Toro’s The Strain. 
				</p>
			</div> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
