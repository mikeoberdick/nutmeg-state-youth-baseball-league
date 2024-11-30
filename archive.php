<?php
/**
 * The template for displaying a general archive.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="generalArchive">
			<?php get_template_part( 'snippets/hero'); ?>

			<section>
				<div class="container">
					<div class="row">
						<?php if(have_posts()) : ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="col-sm-12">
									
								</div><!-- .col-sm-12 -->
							<?php endwhile; ?>
						<?php else : ?>
							<div class="col-sm-12">
								<div class = "no-results">
									There are no posts to show.
								</div><!-- .no-results -->
							</div><!-- .col-sm-12 -->	
						<?php endif; ?>				
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- section -->
			
		</div><!-- #generalArchive -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>