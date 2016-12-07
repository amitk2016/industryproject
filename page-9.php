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
	<div class="row header-past">
		<div class="overlay-box">
				<h1 style="margin:0px; color:white; text-transform: uppercase;">Past Shows</h1>
		</div>
	</div>
	<h1 class="text-center top-bottom-spacing">
		Past Shows
	</h1>

	<div class="row padding-left-right">
		<div class="col-md-12 col-md-offset-1">
			<table class="table table-striped" style="width:80%;" cellpadding="10">
		  
			<tbody>
				<tr>
					<th>Date</th>
					<th>Shows</th>
					<th>Location</th>
				</tr>
				<tr>

					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				<tr>
					<td>7 February</td>
					<td> Coastal Comedy (MC)</td>
					<td>Raumati Social Club</td>
				</tr>
				
			</tbody>

		</table>
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
