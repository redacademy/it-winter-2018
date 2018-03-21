<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">

				<div id="footer-sidebar" class="secondary">
            <div id="our-mission" class="our-mission">
                <?php
                if(is_active_sidebar('our-mission')){
               	 dynamic_sidebar('our-mission');
                }
                ?>
								<div class="copy-right">
									<h3>Aim for art, settle for comedy</h3>
									<p>	&copy; <?php echo date( ' Y ' ); ?>Instant Theatre Company</p>
								</div>
                </div>
                <div id="contact-info" class="contact-info">
                <?php
                if(is_active_sidebar('contact-info')){
                dynamic_sidebar('contact-info');
                }
								?>

            </div>

						<div id="subscribe" class="subscribe">
                <?php
                if(is_active_sidebar('subscribe')){
                dynamic_sidebar('subscribe');
                }
								?>
						</div>

						<div class= "footer-logo" >
                <a href="#masthead" class='logo-wrapper'><img src="<?php echo get_template_directory_uri();?>/assets/logo/rocket/black.svg" class="footer__logo-img"/>Back To Top</a>
							</div>
				</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

		</body>
</html>
