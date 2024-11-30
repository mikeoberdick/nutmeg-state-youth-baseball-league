<?php $newsletter = get_field('newsletter_subscription', 'options'); ?>

<section id = "newsletterSignup">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class = "h3"><?php echo $newsletter['header']; ?></h2>
				<p><?php echo $newsletter['copy']; ?></p>
				<div id="mc_embed_signup">
					<form action="<?php echo $newsletter['form_action_url']; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll" class = "d-flex flex-column flex-md-row justify-content-center">
							<div class="mc-field-group">
								<label for="mce-EMAIL" class = "sr-only">Email Address </label>
								<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder = "Email Address">
							</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true">
						    	<label for="honeypot" class = "sr-only">Honeypot</label><input id = "honeypot" type="text" name="b_deb9dbccc659cb7303cfc5eb7_69b769e1f8" tabindex="-1" value="" title = "Anti-spam input">
						    </div>
						    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" type = "button" class="btn w-100 blue-button h-100">
						    </div>
					    </div>
					</form>
				</div><!-- #mc_embed_signup -->
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->	
</section><!-- #newsletterSignup -->