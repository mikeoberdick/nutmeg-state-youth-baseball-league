<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="singlePost">
			<?php get_template_part( 'snippets/hero'); ?>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<article id = "thePost">
							<div id="postHeader">
								<div class="row">
									<div class="left col-md-5">
										<div class="inner-container">
											<div class = "categories">
												<?php $cats = '';
												foreach((get_the_category()) as $category) {
													if($category->cat_name !== 'All Topics') {
														$link = get_category_link($category);
														$cats .= '<a class = "text-uppercase font-weight-bold category-link" href = "' . $link . '">' . $category->cat_name . '</a>, ';
													}
												}
												echo '<span>' . rtrim($cats, ', ') . '</span>'; ?>
											</div><!-- .categories -->
										<h1 class="h2 post-title"><?php the_title(); ?></h1>
										<span class = "the-date">Published <?php echo get_the_date('F j, Y'); ?></span>
										</div><!-- .inner-container -->
									</div><!-- .col-md-5 -->
									<div class="right col-md-7">
										<?php $img = get_field('featured_image'); ?>
										<img class = "mt-3 mt-md-0" src = "<?php echo $img['sizes']['blog']; ?>" alt="<?php echo $img['alt']; ?>">
									</div><!-- .col-md-7 -->
								</div><!-- .row -->
							</div><!-- #postHeader -->
							<div class="wysiwyg">
								<?php the_content(); ?>
							</div><!-- .wysiwyg -->	
						</article><!-- #thePost -->
						<section id="postFooter">
							<div class="share">
								<?php echo do_shortcode('[addtoany]'); ?>
							</div><!-- .share -->
						</section><!-- .postFooter -->
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- #singlePost -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>