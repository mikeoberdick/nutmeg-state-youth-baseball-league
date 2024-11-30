<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>

<div id="js-heightControl" style="height: 0;">&nbsp;</div>

<div id="wrapperFooter">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer-menu',
							'container_class' => '',
							'container_id'    => 'footerNavMenu',
							'menu_class'      => 'footer-navigation',
							'fallback_cb'     => '',
							'menu_id'         => 'footerMenu',
							'depth'           => 1,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
				<?php get_template_part( 'snippets/social-links'); ?>
				<footer id="colophon" class="site-footer text-center small">
					<div class="container">
						<div class="col-sm-12">
							<p id="copyrightAndTerms">
								&copy; <?php echo date('Y') . ' ' . get_bloginfo( 'name' ) . '. All rights reserved. ' ?><a href="/terms-and-conditions">Terms & Conditions</a>
							</p>
							<p class = "mb-0">Website Designed & Developed by <a target = "_blank" href="https://pixelstrikecreative.com">Pixelstrike Creative</a></p>
						</div><!-- .col-sm-12 -->
					</div><!-- .container -->
				</footer><!-- #colophon -->
			</div><!--.col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #wrapperFooter -->

<div id="cookieNotification">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="wysiwyg mb-2">
					<?php the_field('cookie_notification_text', 'options'); ?>
				</div><!-- .wysiwyg -->
				<button id = "accept" role = "button" class = "btn orange-button"><?php the_field('cookie_button_text', 'options'); ?></button>
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #cookieNotification -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script>
  //AOS.init({
  	//duration: 1500,
  	//once: true,
  //});
</script>

<?php if (is_page_template('templates/homepage.php')) : ?>
<script>
	jQuery(document).ready(function() {
  		jQuery('#heroSlider').slick({
  			arrows: false,
  			dots: true,
  			appendDots: jQuery('#heroDots'),
		    slidesToShow: 1,
		    slidesToScroll: 1,
		    fade: true,
		    cssEase: 'ease-in-out'
  		});
	});
</script>
<?php endif; ?>

</body>
</html>