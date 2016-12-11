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

	<!-- <div id="primary" class="content-area container main-box">
		<main id="main" class="site-main" role="main"> -->
		<div class="container-fluid front-page-box">
			<div class="row bg-image">
				<div class="bg-color">
					<div id="headshot-box">
						<img src="<?php echo get_template_directory_uri(); ?>/images/alex-headshot.png" class="img-responsive" alt="alexander headshot pic" width="200" height="200">
					</div>
					<div class="home-heading text-center">
						<h1><strong>Alexander Sparrow</strong></h1>
						<h5><strong>Australasia's Number 1 Donald Trump Impersonator</strong></h5>
					</div>
					<div class="social-links-main-page">
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
					</div>
				</div>		
			</div>
			<div class="row latest-box side-padding">
				<h1 class="text-center">Latest News</h1>
				<div class="col-md-3">
					<figure>
						 <img src="<?php echo get_template_directory_uri(); ?>/images/Breakfast.jpg" class="img-responsive" alt="alexander's pic of the interview in TVNZ Breakfast show">
						  <figcaption class="text-center">Alexander @ TVNZ Breakfast show</figcaption>
					</figure>
				</div>
				<div class="col-md-3">
					<figure>
						 <img src="<?php echo get_template_directory_uri(); ?>/images/Breakfast.jpg" class="img-responsive" alt="alexander's pic of the interview in TVNZ Breakfast show">
						  <figcaption class="text-center">Alexander @ TVNZ Breakfast show</figcaption>
					</figure>
				</div>
				<div class="col-md-3">
					<figure>
						 <img src="<?php echo get_template_directory_uri(); ?>/images/Breakfast.jpg" class="img-responsive" alt="alexander's pic of the interview in TVNZ Breakfast show">
						  <figcaption class="text-center">Alexander @ TVNZ Breakfast show</figcaption>
					</figure>
				</div>
				<div class="col-md-3">
					<figure>
						 <img src="<?php echo get_template_directory_uri(); ?>/images/Breakfast.jpg" class="img-responsive" alt="alexander's pic of the interview in TVNZ Breakfast show">
						  <figcaption class="text-center">Alexander @ TVNZ Breakfast show</figcaption>
					</figure>
				</div>
				<!-- latest news text  -->
				<div class="col-md-12">
					<p>Alexander is a writer / performer and award-winning director from New Zealand, and Australasia’s foremost Donald Trump impersonator. He has been interviewed on TVNZ’s Breakfast, TV3’s Story, The Wall Street Journal, NZH Focus, Radio New Zealand, MORE FM, The Breeze, and Newstalk ZB. His shows have also been featured in The Dominion Post and the New Zealand Herald. During October and November 2016, he is taking his critically acclaimed one-man comedy on Donald Trump, The President, on a national tour. (He is also taking corporate gigs, see the contact page if you are interested in having him at your event.)</p>
				</div>


				<?php if(get_theme_mod('aw-latest-callout-display') == "Yes") {?>
					<div class="row box-1 top-bottom-space">
						
						<div class="col-md-4 latest-left top-bottom-padding">
							<img src="<?php echo wp_get_attachment_url(get_theme_mod('aw-latest-callout-image'))?>" class="img-responsive">
						</div>
						<div class="col-md-8">
							<h2 class="text-center" style="margin-bottom:20px;text-transform: uppercase;"><?php echo get_theme_mod('aw-latest-callout-heading'); ?></h2>
							<p class="text-center" style="margin-bottom:20px;"><?php echo get_theme_mod('aw-latest-callout-text'); ?></p>
							<div class="text-center"><a href="<?php echo get_permalink(get_theme_mod('aw-latest-callout-link')); ?>" class="btn btn-info btn-lg">Read More</a></div>
						</div>
					</div>
				<?php } ?>

				<!-- <div class="col-md-4 latest-left top-bottom-padding">
					<img src="<?php echo get_template_directory_uri(); ?>/images/President.jpg" class="img-responsive" alt="President Donald trump backside poster image">
				</div>
				<div class="col-md-8">
					<h2 class="text-center" style="margin-bottom:20px;text-transform: uppercase;">The President</h2>
					<p class="text-center" style="margin-bottom:20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis eos delectus tempora eligendi expedita, minus neque molestiae quibusdam sit culpa suscipit beatae odit quia! Accusamus debitis, consectetur ratione aliquid nihil.</p>
					
				</div> -->
				
			</div>

			<div class="row about-me top-bottom-padding side-padding">
				<h1 class="text-center">About Me</h1>
				<div class="col-md-8 about-me-text">
					<p>Alexander’s solo shows include ENIGMA, de Sade, and A Collection of Noises. His previous scripts cover a wide range of genres – from black comedy to psychological horror – and several have had performances around New Zealand. October 2016 was his first time writing and directing in the Short + Sweet Festival: a showcase of ten minute plays held at BATS Theatre, Wellington. His work, New Tricks, premiered there and won best director and best actor. He also produces the monthly rock music/comedy gig, Rock ‘n’ Lols, at Valhalla in Wellington.
					
					Alexander has performed at Shakespeare’s Globe in London as part of the Shakespeare Globe Centre New Zealand’s Young Shakespeare Company (SGCNZ YSC). He has written and performed in multiple solo and group shows in the New Zealand Fringe Festival and the New Zealand International Comedy Festival.</p>
				</div>
				<div class="col-md-4">
					
					<div class="profile-box">
						<div class="pin-box">
							<img src="<?php echo get_template_directory_uri(); ?>/images/wall-pin.png" class="img-responsive" alt="wall-pin">
						</div> 
						<img src="<?php echo get_template_directory_uri(); ?>/images/profile-1.jpg" alt="Alexander profile pic number one">
					</div>
				</div>
			</div>

			<!-- review box  -->
			<div class="review-box">
				<div class="overlay-review">
					<div class="row text-center">
						<h1 class="text-center" style="color:white;text-transform: uppercase;">Reviews</h1>
						<div class="col-md-5 col-md-offset-1">
							<div class="review-1">
								<a href="#"><p>“Sparrow has the assurance and gravitas of a pro . . .”
								Lumiere Reader</p></a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="review-1">
								<a href="#"><p>“Sparrow has the assurance and gravitas of a pro . . .”
								Lumiere Reader</p></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
							<div class="review-1">
								<a href="#"><p>“Sparrow has the assurance and gravitas of a pro . . .”
								Lumiere Reader</p></a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="review-1">
								<a href="#"><p>“Sparrow has the assurance and gravitas of a pro . . .”
								Lumiere Reader</p></a>
							</div>
						</div>
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

		</div>

		
		<!-- </main> --><!-- #main -->
	<!-- </div> --><!-- #primary -->

<?php
get_sidebar();
get_footer();
