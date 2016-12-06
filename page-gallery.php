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
		
		<div class="row header-gallery">
			
		</div>
		<h1 class="text-center top-bottom-space side-padding">
			Gallery
		</h1>

		<div class="row text-center top-bottom-space side-padding">
			<div class="col-md-3 "><img src="<?php echo get_template_directory_uri(); ?>/images/Trump.jpg" class="img-responsive"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/Trump.jpg" class="img-responsive"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/Trump.jpg" class="img-responsive"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/Trump.jpg" class="img-responsive"></div>
		</div>	
		<div class="row text-center top-bottom-space side-padding">
			<div class="col-md-3 "><img src="<?php echo get_template_directory_uri(); ?>/images/Trump.jpg" class="img-responsive"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/Trump.jpg" class="img-responsive"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/Trump.jpg" class="img-responsive"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/Trump.jpg" class="img-responsive"></div>
		</div>	
		<div class="row top-bottom-space side-padding">
			<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat voluptatibus facere, quae consectetur aspernatur tempora optio rem ipsa quam culpa, ut explicabo cumque praesentium saepe, exercitationem repudiandae! Quis, natus atque.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos rem doloribus, nesciunt ad, quo veritatis accusamus dolorem vel ut hic accusantium beatae velit aliquam autem delectus expedita. Delectus, aspernatur, aliquid!
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex suscipit adipisci deleniti dignissimos esse vitae qui aperiam voluptas commodi quis temporibus, saepe quidem fuga eaque cupiditate, nostrum, optio nesciunt vero.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo pariatur, vero quibusdam consequuntur fugit dolorem, voluptate, dolore dolor ab consequatur porro. Voluptates, vitae ipsa voluptatum laboriosam, ipsum ullam iste ducimus.</p>
			<img src="http://placehold.it/300x300" alt="">
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
