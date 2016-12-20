<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package President-Sparrow
 */

get_header(); ?>

<!-- 	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main"> -->
		<div class="row header-contact ">
			<div class="overlay-box">
				<h1 style="margin:0px; color:white; text-transform: uppercase;">Contact</h1>
			</div>
		</div>
		
		<div class="row top-bottom-padding side-padding">
			<div class="col-md-9">
				<div class="row clearfix bottom-space side-padding">
					<div class="pull-left" id="contact-left">
						<img src="<?php echo get_template_directory_uri(); ?>/images/Trump.jpg" class="img-responsive" alt="alexander profile pic in the contact page">
					</div>
					<div class="pull-right box-10" id="contact-right">
						<p>Alexander is available to hire as a writer or performer.
							<br>
							He is currently touring New Zealand as Donald Trump, in his show, The President. Alexander takes corporate gigs, party appearances, and more in full Trump costume. Please write to the address below for more information, he’d love to hear from you.
							<br><br>
							<strong>Email: asparrowwriter@gmail.com</strong>
						</p>	
					</div>
					
				</div>
				<div class="well text-center" style="background-color:#d3d3d3;">
					<strong>Testimonials</strong>
				</div>
					<p class="side-padding">
						“…simply outstanding!”
						<br><br>
						Alexander Sparrow as Donald Trump was our surprise 15 minute guest act for this year’s office Christmas function.  Alexander was simply outstanding!  We are a Wellington CBD office floor with a mix of professionals including doctors, lawyers, company directors and management, with an age range of 23 to 73.  Alexander’s preparation was thorough, ensuring that he had a good feel of who would be there and the tone required for our particular event.  The result was an hilarious performance with a mix of gags generally lampooning Trump and audience-specific jokes which brought many in the audience into the act at exactly the right moment and in just the right way.  Everyone loved it.

						Believe me, in my view you can do no better than engage Alexander Sparrow as Donald Trump for your next corporate event.
					</p>
					<p class="pull-right side-padding"><strong>Matthew Sherwood King
						<br>Barrister</strong></p>
			</div>
			<div class="col-md-3">
				
				<div>
					<h3 class="text-center" style="margin-top:0px;margin-bottom:20px;">
					<strong>Facebook</strong></h3>
					<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Falexandersparrowcomedian/?fref=ts&width=600&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435"
					scrolling="yes" frameborder="0" style="overflow:hidden;width:100%;height:430px; border:1px solid #ccc;background:white; float:left;margin-bottom:25px;" allowTransparency="true">
					</iframe>
				</div>
				
				<div>
					<hr>
					<h3 class="text-center text-capitalize" style="border-top:1px solid #ccc;padding-top:20px;"><strong>twitter</strong></h3>
					<a class="twitter-timeline" data-height="430" href="https://twitter.com/DonaldTrumpNZ" style="border:1.5px solid #ccc;">Tweets by DonaldTrumpNZ</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
			</div>
		</div>


		
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	<!-- 	</main> --><!-- #main -->
<!-- 	</div> --><!-- #primary -->

<?php
get_sidebar();
get_footer();
