<?php
/**
 * The template for displaying all single case studies.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="singleCaseStudy">
			
			<?php get_template_part( 'snippets/hero'); ?>
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<article id = "theCaseStudy">
							<div id="postHeader">
								<div class="row">
									<div class="left col-md-5">
										<div class="inner-container">
											<h2 class=" h5 title"><?php the_title(); ?></h1>
											<h3><?php the_field('subtitle'); ?></h3>
										</div><!-- .inner-container -->
									</div><!-- .col-md-5 -->
									<div class="right col-md-7">
										<?php $img = get_field('featured_image'); ?>
										<img class = "mt-3 mt-md-0" src = "<?php echo $img['sizes']['blog']; ?>" alt="<?php echo $img['alt']; ?>">
									</div><!-- .col-md-7 -->
								</div><!-- .row -->
							</div><!-- #postHeader -->
							<div class="wysiwyg mt-4">
								<?php the_field('content'); ?>
							</div><!-- .wysiwyg -->	
						</article><!-- #theCaseStudy -->
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- #singleCaseStudy -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>