<?php //terms
$term_obj_list = get_the_terms( $post->ID, 'group' );
$termsForDisplay = join(', ', wp_list_pluck($term_obj_list, 'name'));
$termsForSorting = join(' ', wp_list_pluck($term_obj_list, 'slug'));
?>
<div class="col-lg-4 mix <?php echo $termsForSorting; ?>">
	<div class="use-case-wrapper" data-aos="fade-up">
		<?php $img = get_field('featured_image'); ?>
		<a href="<?php the_permalink(); ?>">
		<div class="image-wrapper" style = "background:url('<?php echo $img['sizes']['one-third']; ?>');">
		</div><!-- .image-wrapper -->								
		<div class="term-wrapper">
			<h5><?php echo $termsForDisplay; ?></h5>
			<img src="<?php echo get_stylesheet_directory_uri() . '/img/red_caret_right.svg'; ?>" alt="">
		</div><!-- .term-wrapper -->								
		<h5 class = "mb-0"><?php the_title(); ?></h5></a>	
	</div><!-- .use-case-wrapper -->
</div><!-- .col-lg-4 -->