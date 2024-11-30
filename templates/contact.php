<?php /* Template Name: Contact */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="contact">
			<?php get_template_part( 'snippets/hero'); ?>
			
		</div><!-- #contact -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>