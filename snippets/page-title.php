<?php $title = get_field('page_title'); ?>
<?php if (is_home() || is_category() || is_singular('post')) {
	$title = get_the_title();
} else if (!$title) {
	$title = get_the_title();
} ?>

<section class = "page-title">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="h3 white mb-0 open-sans font-weight-bold"><?php echo $title; ?></h1>
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->	
</section><!-- .hero -->