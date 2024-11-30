<div class="contact-info">
	<?php $phone = preg_replace('/[^0-9]/', '', get_field('phone_number', 'option')); ?>
	<a href="tel:<?php echo $phone ?>"><?php the_field('phone_number', 'option'); ?></a>
	<p><?php if (get_field('address_line_1', 'options')) {echo get_field('address_line_1', 'options');} ?><?php if (get_field('address_line_2', 'options')) {echo '<br>' . get_field('address_line_2', 'options');} ?></p>
</div><!-- .contact-info -->