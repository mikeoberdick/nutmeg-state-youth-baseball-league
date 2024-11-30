<?php
/**
 * The default template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="defaultPageTemplate">
			
			<?php get_template_part( 'snippets/hero'); ?>

			<section id = "theContent">
				<div class="container">
					<div class="row ">
						<div class="col-sm-12">
							<div class="wysiwyg">
								<?php the_field('page_content'); ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #theContent -->
			
		</div><!-- #defaultPageTemplate -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>