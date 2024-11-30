<?php /* Template Name: About Us */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="aboutUs">
			<?php get_template_part( 'snippets/hero'); ?>
			
		</div><!-- #aboutUs -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>