<?php
$logos = cs_get_option('logos');
$logos_array = explode(',', $logos);
if (!is_page(array('92', '94')) && !empty($logos)) :

?>


	<!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->
	<section class="client-logo darker-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="all-client-logo">
						<?php foreach ($logos_array as $logo) : $logo_array = wp_get_attachment_image_src($logo, 'large'); ?>
							<img src="<?php echo $logo_array[0]; ?>" alt="" />
						<?php endforeach; ?>
					</div>
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- end client section -->
<?php endif; ?>

<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
<footer>
	<div class="primary-footer">
		<div class="container">
			<div class="row">


				<!-- start single footer widget -->
				<div class="col-sm-6 col-md-4">
					<div class="footer-widget about-us">
						<?php dynamic_sidebar('footer-1'); ?>
					</div>
				</div><!-- end single footer widget -->

				<!-- start single footer widget -->
				<div class="col-sm-6 col-md-2">
					<div class="footer-widget usefull-link">
						<?php dynamic_sidebar('footer-2'); ?>
					</div>
				</div><!-- end single footer widget -->

				<!-- start single footer widget -->
				<div class="col-sm-6 col-md-3">
					<div class="footer-widget latest-post">
						<?php dynamic_sidebar('footer-3'); ?>
					</div>
				</div><!-- end single footer widget -->

				<!-- start single footer widget -->
				<div class="col-sm-6 col-md-3">
					<div class="footer-widget news-letter">
						<?php dynamic_sidebar('footer-4'); ?>



					</div><!-- /.news-letter -->
				</div><!-- end single footer widget -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.primary-footer -->

	<!-- footer copyright area -->
	<div class="copyright-wrapper text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright@2021 eTechwing. All Rights Reserved. Beautiful WordPress Theme By <a href="#">TrendyeTechwingTheme</a></p>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- ./end copyright-wrapper -->
</footer>

<!-- preloader -->
<div id="loading">
	<div id="loading-center">
		<div id="loading-center-absolute">
			<div class="object" id="object_four"></div>
			<div class="object" id="object_three"></div>
			<div class="object" id="object_two"></div>
			<div class="object" id="object_one"></div>
		</div>
	</div>
</div>


<?php wp_footer(); ?>
</body>

</html>