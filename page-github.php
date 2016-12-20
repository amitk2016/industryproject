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
	<style>
		input[type="text"] {
		  display: block;
		  margin: 0;
		  width: 100%;
		  font-family: sans-serif;
		  font-size: 18px;
		  appearance: none;
		  box-shadow: none;
		  border-radius: none;
	}
	</style>

	<!-- <div class="container-fluid" style="padding-bottom:300px;">
 		<div class="row github-header t">
			<div class="overlay-box">
				<h1 style="margin:0px; color:white; text-transform: uppercase;">Github Api</h1>
			</div>
		</div> -->
 		
		<div class="container" style="padding-bottom:300px;padding-top: 100px;">
			<div class="row">
				<h2 class="text-center">Github API </h2>
			    <p class="text-center">Enter a single Github username below</p>
			    <div class="col-md-6 col-md-offset-1">
			    	<input type="text" name="username" id="username" placeholder="Github username..." class="text-center">
			    </div>
			    <div class="col-md-4">
			    	  <a href="#" id="button" class="btn btn-primary btn-block">Pull User Data</a>
			    </div>
			</div>
			<div class="row" style="padding-top:50px;">
					<div class="col-md-6">
						<div id="display-2" class="clearfix text-center"></div>
					</div>
					<div class="col-md-6">
						<div id="display-1" class="clearfix text-center"></div>
					</div>
				  
				   
			</div>
		</div>

		
		 
		 
		<!-- ./#primary -->
	</div>

<?php
get_sidebar();
get_footer();
