<?php
/**
 * The template for displaying all use case posts tagged as higher education.
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
		<div id="educationUseCaseArchive" class = "use-case-archive">

			<?php get_template_part( 'snippets/page-title'); ?>

			<div class="container">
				<div class="row">
					<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'loop-templates/content', 'use_case' ); ?>
					<?php endwhile; ?>
				</div><!-- .row -->
			</div><!-- .container -->

		</div><!-- #educationUseCaseArchive -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>