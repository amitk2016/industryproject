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
		<h1 class="text-center">Contact Me</h1>
		<div class="row top-bottom-space side-padding">
			<div class="col-md-5 ">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Trump.jpg" class="img-responsive" alt="alexander profile pic in the contact page">
			</div>
			<div class="col-md-4 box-10">
				<p>Alexander is available to hire as a writer or performer.
					<br><br>
					He is currently touring New Zealand as Donald Trump, in his show, The President. Alexander takes corporate gigs, party appearances, and more in full Trump costume. Please write to the address below for more information, he’d love to hear from you.
					<br><br>
					asparrowwriter@gmail.com
				</p>
			</div>
			<div class="col-md-3">
				<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Falexandersparrowcomedian/?fref=ts&width=600&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435"
				scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:600px; height:430px; background: white; float:left; " allowTransparency="true">
				</iframe>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				
			</div>
			<div class="col-md-4">
				
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
