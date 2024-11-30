<?php

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="categoryArchive">
			<?php get_template_part( 'snippets/hero'); ?>			

			<section id = "thePosts">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1 class = "h2 text-center mb-3 mb-lg-0"><?php echo single_cat_title('', false); ?></h1>
							</div><!-- .col-sm-12 -->
						<div id = "categoryLinks" class="col-sm-12">
							<div id = "desktopCategoryWrapper" class = "d-none d-lg-flex">
								<?php
								$currentCategory = get_category( get_query_var( 'cat' ) );
								$catName = $currentCategory->cat_name; ?>
								<?php $categories = get_categories();
								foreach($categories as $category) { ?>
								   	<a class = "<?php if($category->cat_name == $catName) { echo 'current '; } ?>category-link" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
								<?php } ?>
							</div><!-- #desktopCategoryWrapper -->
							<div id = "mobileCategoryWrapper" class="d-lg-none">
								<div class="select-wrapper">
									<?php wp_dropdown_categories(); ?>
								</div><!-- .select-wrapper -->
							</div><!-- #mobileCategoryWrapper -->
						</div><!-- #categoryLinks -->
					</div><!-- .row -->
					<script>
					  document.getElementById('cat').onchange = function() {
					    // if value is category id
					    if( this.value !== '-1' ){
					      window.location='/?cat='+this.value
					    }
					  }
					</script>
					<div class="row">						
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'snippets/the-post'); ?>
						<?php endwhile; ?>
						
						<?php 
						$queriedObject = get_queried_object();
						$count = $queriedObject->count;
						$ppp = get_option('posts_per_page');

						if ( $queriedObject->count > $ppp ) { ?>
						<div id="pagination">
							<?php understrap_pagination(); ?>
						</div><!-- #pagination -->	
						<?php } ?>		
					</div><!-- .row -->
				</div><!-- .container -->

		</div><!-- #categoryArchive -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>