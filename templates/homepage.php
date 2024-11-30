<?php /* Template Name: Homepage */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="homepage">
			<?php get_template_part('snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<section id="sectionOne">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionOne -->

			<?php $sectionTwo = get_field('section_two'); ?>
			<section id="sectionTwo">
				<div class="container">
					<div class="row">
						<div class="left col-sm-12">
							
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionTwo -->

			<?php $sectionThree = get_field('section_three'); ?>
			<section id="sectionThree">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionThree -->

		</div><!-- #homepage -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>