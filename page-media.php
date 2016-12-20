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
			<div class="container-fluid">
				<div class="row header-media">
					<div class="overlay-box">
						<h1 style="margin:0px; color:white; text-transform: uppercase;">Media</h1>
					</div>
				</div>
				
				<!-- <h1 class="text-center">Media</h1> -->
				<div class="row top-bottom-padding side-padding">
					
					<div class="col-md-6 text-center">
						<iframe width="100%" height="350" src="https://www.youtube.com/embed/7xX_KaStFT8">
						</iframe>
						<h4><strong>Interview @TVNZ</strong></h4>
					</div>
					<div class="col-md-6 text-center">
						<iframe width="100%" height="350" src="https://www.youtube.com/embed/f0UB06v7yLY">
						</iframe>
						<h4><strong>Interview @TV3 STORY</strong></h4>
					</div>
				</div>
				<div class="row top-bottom-padding side-padding">
					<div class="col-md-12 padding-left-right">
						<p>Alexander is a writer / performer and award-winning director from New Zealand, and Australasia’s foremost Donald Trump impersonator. He has been interviewed on TVNZ’s Breakfast, TV3’s Story, The Wall Street Journal, NZH Focus, Radio New Zealand, MORE FM, The Breeze, and Newstalk ZB. His shows have also been featured in The Dominion Post and the New Zealand Herald. During October and November 2016, he is taking his critically acclaimed one-man comedy on Donald Trump, The President, on a national tour</p>
					</div>
				</div>

				<div class="row text-center media-page top-bottom-padding side-padding">
					<div class="col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="TVNZ" class="img-responsive">
						<h5>TVNZ Breakfast</h5>
					</div>
					<div class="col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/images/3_original.jpg" alt="TVNZ" class="img-responsive">
						<h5>Short+Sweet Festival</h5>
					</div>
					<div class="col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/images/4-original.jpg" alt="TVNZ" class="img-responsive">
						<h5>Wellington Comedy Awards</h5>
					</div>
					<div class="col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="TVNZ" class="img-responsive">
						<h5>Herald Focus</h5>
					</div>
				</div>
				<div class="row text-center media-page top-bottom-padding side-padding">
					<div class="col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/images/nzhearld-crop.jpg" alt="TVNZ" class="img-responsive">
						<h5>Story-1</h5>
					</div>
					<div class="col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/images/trump-crop-media-1.jpg" alt="TVNZ" class="img-responsive">
						<h5>Trump-1</h5>
					</div>
					<div class="col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/images/hearld2-crop.jpg" alt="TVNZ" class="img-responsive">
						<h5>Story-2</h5>
					</div>
					<div class="col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/images/trump-2-crop.jpg" alt="TVNZ" class="img-responsive">
						<h5>Trump-2</h5>
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
