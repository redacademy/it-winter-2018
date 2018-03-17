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

				<h1><?php the_title(); ?></h1>

				<?php the_post_thumbnail(); ?>

				<p><?php echo CFS()->get( 'description' ); ?></p>

				<div class="studio-grid">
					<?php $studios = CFS()->get( 'room_option' ) ?>
					<?php foreach ( $studios as $studio ) : ?>
						<div class="studio-grid-part">
							<img src="<?php echo $studio['room_image']; ?>">
							<span class="studio-information">
									<h3><?php echo $studio['room_name']; ?></h3>
									<p><span class="studio-category">Rental Rate:</span> <?php echo $studio['rental_rate']; ?></p>
							</span>
							<div class="size-details">
								<p><span class="studio-category">Size:</span> <?php echo $studio['size']; ?></p>
								<p><span class="studio-category">Suggested Group Size:</span> <?php echo $studio['suggested_group_size']; ?></p>
								<p><span class="studio-category">Chairs:</span> <?php echo $studio['chairs']; ?></p>
							</div>
							<p><span class="studio-category">Included:</span> <?php echo $studio['included']; ?></p>
							<p><span class="studio-category">Available:</span> <?php echo $studio['available']; ?></p>
							<p><span class="studio-category">Possible Uses:</span> <?php echo $studio['possible_uses']; ?></p>
							<?php 
								$pleaseNote = $studio['please_note'];
								if ( strlen($pleaseNote) != 0 ) :
							?>
									<p><span class="studio-category-note">Please Note:</span> <?php echo $studio['please_note']; ?></p>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>

				<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
