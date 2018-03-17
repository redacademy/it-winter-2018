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

				<h1><?php the_title(); ?> </h1>
				
				<?php	the_post_thumbnail(); ?>
				<p><?php echo CFS()->get( 'hire_us_description' ); ?></p>
				
				<div class="hire-us-grid">
			  <?php
					$fields = CFS()->get( 'type_of_events' ); ?>
				
				<?php 
					foreach ( $fields as $field ) { ?>
					<div class="hire-us-part">
					<h2><?php echo $field['heading']; ?></h2>
					<p><?php echo $field['description']; ?></p>
					<h3>Perfect for:</h3>
					<?php 
						$perfect_for = $field['perfect_for']; 
						$perfect_for = explode(", ", $perfect_for); ?>
						<ul><?php
						foreach ( $perfect_for as $fits ) { ?>
							<li><?php echo $fits; ?></li>
						<?php 
						}
					?></ul></div>
					<?php
					}
					?></div>

					<h1>Applied Improv</h1>
					<p><?php echo CFS()->get( 'applied_improv' );  ?></p>

					<div class="hire-us-grid">
			  <?php $applied_improv = CFS()->get( 'where_applied' ); ?>
				
				<?php 
					foreach ( $applied_improv as $field ) { ?>
					<div class="hire-us-part">
					<h2><?php echo $field['title']; ?></h2>
					<p><?php echo $field['description']; ?></p>
					</div>
					<?php
					}
				?></div>

				<div class="business-widget">
					<div class="business-grid">
					<h1>The Power of Improv for Business</h1>
					<?php 
						$articles = CFS()->get( 'business_articles' );
						foreach ( $articles as $article ) { ?>
						<div class="business-grid-part">
							<p><?php echo $article['article_excerpt']; ?></p>
							<span class="article-source">
									<p><?php echo $article['article_location']; ?></p>
									<?php echo $article['article_link']; ?>
							</span>
						</div>
						<?php } ?>
					</div>
				</div>

				<h1>Some Companies We Have Worked With</h1>
				<div class="company-grid">
				<?php 
					$companies = CFS()->get( 'company_images' );
					foreach ( $companies as $company ) {?>
						<img src="<?php echo $company['image']; ?>">
				<?php 
					}
				?>
				</div>

				<div class="testimonial-widget">
					<div class="testimonial-grid">
					<h1>Testimonials</h1>
					<?php 
						$testimonials = CFS()->get( 'testimonials' );
						foreach ( $testimonials as $testimonial ) { ?>
						<div class="testimonial-grid-part">
							<img src="<?php echo $testimonial['image'] ?>">
							<div class="testimonial-description">
							<p><?php echo $testimonial['testimonial']; ?></p>
							<span class="testimonial-source">
									<p><?php echo $testimonial['author']; ?></p>, 
									<?php echo $testimonial['authors_position']; ?>
							</span>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>

				<?php the_content(); ?>
				</div>



			<?php endwhile; // End of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
