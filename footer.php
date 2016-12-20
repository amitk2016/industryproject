<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package President-Sparrow
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer footer-box" role="contentinfo">
		<div class="site-info">
			
			<h1 class="text-center">Contacts</h1>
			<ul class="text-center">
				<li>
					<a href="https://www.facebook.com/alexandersparrowcomedian/" target="_blank">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/DonaldTrumpNZ" target="_blank">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</li>
				<li>
					<a href="https://www.youtube.com/channel/UC1vyBI8P_28ceXg5gCzqY1g" target="_blank">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/alexandersparrowproductions/?hl=en" target="_blank">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</li>
			</ul>
			<hr style="background-color:#000;width:40%;">
			<p class="text-center">Alexander Sparrow-&copy <?php echo date('Y');?> </p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Add jQuery library -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?= get_template_directory_uri() ?>/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<!-- Add fancyBox -->
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="<?= get_template_directory_uri() ?>/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<!-- <script src="<?= get_template_directory_uri() ?>/js/jquery.slicknav.min.js"></script> -->
	<script src="<?= get_template_directory_uri() ?>/js/functions.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox();
		});
	</script>
</body>
</html>
