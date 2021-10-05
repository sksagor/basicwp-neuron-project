<?php

/*
Template Name: Contact Template
*/
get_header(); ?>
<!-- ::::::::::::::::::::: start contant section :::::::::::::::::::::::::: -->
<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
				<!-- contact title -->
				<div class="template-title text-center">
					<h2>Get In Touch With Us</h2>
					<p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">

				<?php echo do_shortcode('[[contact-form-7 id="237" title="Contact Us Form"]]'); ?>
			</div>

			<div class="col-md-4">
				<!-- company address -->
				<div class="company-address">
					<ul>
						<li>
							<i class="fa fa-map-marker"></i>
							<p>305 Royal Track Suite 019. New York United States of America.</p>
							<span class="divider"></span>
							<p>Hoffman Parkway, P.O Box 154 Mountain View. United States of America.</p>

						</li>
						<li>
							<i class="fa fa-phone"></i>
							<p>Fax: 545 751 385
								<br>Phone: 0123 456 789
							</p>
						</li>
						<li>
							<i class="fa fa-envelope-o"></i>
							<a>info@trendytheme.com</a>
							<a>www.trendytheme.com</a>
						</li>
					</ul>
				</div><!-- ./end company address -->
			</div>
		</div>
	</div>
</section>

<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
<?php get_footer(); ?>