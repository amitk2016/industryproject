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
					<a href="#">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
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

</body>
</html>
