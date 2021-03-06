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

	<div class="container-fluid">
 		<div class="row header-blogs ">
			<div class="overlay-box">
				<h1 style="margin:0px; color:white; text-transform: uppercase;">My Blogs</h1>
			</div>
		</div>
 	

		<div class="row" id="primary">
		        <main id="content" class="col-sm-12" role="main">
		                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', get_post_format() ); endwhile; the_posts_navigation(); else : get_template_part( 'template-parts/content', 'none' ); endif; ?>
		            <!-- ./#article-product -->
		        </main><!-- ./#content -->
		 
		 
				<aside class="col-sm-4">
		            <?php get_sidebar(); ?>
		        </aside>
		 
		 
		<!-- ./col-sm-4 -->
		    </div>
		 
		 
		<!-- ./#primary -->
	</div>

<?php
get_sidebar();
get_footer();
