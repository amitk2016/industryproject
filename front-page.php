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

		<!-- full background image with text  -->
		<div class="container-fluid front-page-box">
			<div class="row bg-image">
				<div class="bg-color">
				
						<img src="<?php echo get_template_directory_uri(); ?>/images/alex-headshot.png" class="img-responsive" alt="alexander headshot pic" width="200" height="200">
						
						<h1><strong>Alexander Sparrow</strong></h1>
						<h5><strong>Australasia's Number 1 Donald Trump Impersonator</strong></h5>
					<!--  Social Links on the front page-->
					<div class="social-links-main-page">
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
					</div>
				</div>		
			</div>
			<!-- latest news image section -->
			<div class="container-fluid">
						<div class="row latest-box side-padding">
							<h1 class="text-center" style="margin-bottom:25px;">Latest</h1>
							<div class="col-md-3 col-sm-6">
								<figure>
									 <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" class="img-responsive" alt="alexander's pic of the interview in TVNZ Breakfast show">
									  <figcaption class="text-center" style="color:#9e9e9e"><small>TVNZ's Breakfast</small></figcaption>
								</figure>
							</div>
							<div class="col-md-3 col-sm-6">
								<figure>
									 <img src="<?php echo get_template_directory_uri(); ?>/images/3_original.jpg" class="img-responsive" alt="alexander's pic of the interview in Short + Sweet Festival">
									 <figcaption class="text-center" style="color:#9e9e9e"><small>Short + Sweet Festival</small></figcaption>
								</figure>
							</div>
							<div class="col-md-3 hidden-sm">
								<figure>
									 <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" class="img-responsive" alt="alexander's pic of the interview in NZHeraldFocus">
									  <figcaption class="text-center" style="color:#9e9e9e"><small>NZ Herald Focus</small></figcaption>
								</figure>
							</div>
							<div class="col-md-3 hidden-sm">
								<figure>
									 <img src="<?php echo get_template_directory_uri(); ?>/images/4-original.jpg" class="img-responsive" alt="alexander's pic of the interview in TVNZ Breakfast show">
									 <figcaption class="text-center" style="color:#9e9e9e"><small> Wellington Comedy Awards</small></figcaption>
								</figure>
							</div>

						<!-- latest news text  -->
						<div class="col-md-12">
							<p class="text-muted">New Tricks, Alexander's first 10 minute play, won best director and best actor at the Short + Sweet Festival in October. Throughout October and November, his satire of Trump, The President, toured New Zealand. It was featured on The Wall Street Journal, TVNZ's Breakfast, and TV3's Story; and sold out multiple times (including three nights at BATS Theatre). Alexander also won Breakthrough Performer at the Wellington Comedy Awards for his achievements.</p>
						</div>

						<!-- Latest show section -->
						<?php if(get_theme_mod('aw-latest-callout-display') == "Yes") {?>
							<div class="bottom-space">
								
								<div class="col-md-4 col-sm-5 latest-left top-bottom-padding">
									<img src="<?php echo wp_get_attachment_url(get_theme_mod('aw-latest-callout-image'))?>" class="img-responsive">
								</div>
								<div class="col-md-8 col-sm-7 bottom-space">
									<h2 class="text-center text-uppercase" style="font-size:20px;"><?php echo get_theme_mod('aw-latest-callout-heading'); ?></h2>
									<hr>
									<p class="text-center text-muted" style="margin-bottom:60px;"><?php echo get_theme_mod('aw-latest-callout-text'); ?></p>
									<div class="text-center"><a href="<?php echo get_permalink(get_theme_mod('aw-latest-callout-link')); ?>" id="latest-buy">More Info</a></div>
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
			</div>
			<!-- About me  -->
			<div class="conatiner-fluid about-me">

					<div class="row  top-bottom-padding side-padding">
						<h1 class="text-center text-uppercase" style="margin-bottom:70px;">About</h1>
						<div class="col-md-8 about-me-text" style="padding-left:35px;">
							<p>Alexander is an award-winning comedian and director from New Zealand, and Australasia’s number 1 Donald Trump impersonator. He has toured several shows; including The President, de Sade, and Pro Comedy Tour. His work covers a wide range of genres – from black comedy to psychological horror – and previous shows include the critically acclaimed A Collection of Noises and ENIGMA. He has written and performed in multiple solo and group shows in the New Zealand Fringe Festival and the New Zealand International Comedy Festival. Alexander is currently working on his most recent novel.</p>
						</div>
						<div class="col-md-4">
							<div class="well">
								<img src="<?php echo get_template_directory_uri(); ?>/images/alex-bw.jpeg" class="img-responsive" alt="Alexander profile pic number one">
							</div>
						</div>
					</div>
			</div>
				

			

			<!-- Review box  -->
			<div class="front-review-box">
				<div class="overlay-review">
				<h1 class="text-center" style="color:white;text-transform: uppercase;">Reviews</h1>
					<div class="container">	
						<div id="review-1" class="row" style="height:40vh;">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<a href="#">
									<div class="well review-first clearfix">
										<p>“Sparrow has the assurance and gravitas of a pro . . .”</p>
										<p class="pull-right"><strong>Lumiere Reader</strong></p>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<a href="#">
									<div class="well review-first clearfix">
										<p>“Beautifully acted, cleverly scripted, surprisingly dark”</p>
										<p class="pull-right"><strong>Theatreview</strong></p>
									</div>
								</a>
							</div>
						</div>
						<div id="review-2" class="row" style="height:40vh;">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<a href="#">
									<div class="well review-first clearfix">
										<p>“. .animated and full of energy. . .strangely entertaining. . .”</p>
										<p class="pull-right"><strong>Dominion Post</strong></p>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<a href="#">
									<div class="well review-first clearfix">
										<p>““A true professional . . . bespoke, artisan comedy.”</p>
										<p class="pull-right"><strong>Wellington Reviews</strong></p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
	
			
		
		<!-- </main> --><!-- #main -->
	<!-- </div> --><!-- #primary -->

<?php
get_sidebar();
get_footer();
