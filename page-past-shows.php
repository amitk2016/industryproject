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
	<div class="container-fluid">
		<div class="row side-padding top-bottom-padding" >
			<table class="table table-hover table-responsive top-bottom-padding">
				<h1 class="text-center">2016</h1>
				  <thead class="thead-default" >
				    <tr>
				      <th class="text-center">Date</th>
				      <th class="text-center">Shows</th>
				      <th class="text-center">Location</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">16 </span><span class="text-muted text-capitalize" style="font-size:12px;">  dec</span></th>
				      <td class="text-muted text-center" style="font-size:16px;letter-spacing: 1.5px;">I Didn’t Write This </td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center">Cavern Club<br>Wellington</td>
				    </tr>
		
				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">10 </span><span class="text-muted text-capitalize" style="font-size:12px;">  dec</span></th>
				      <td class="text-muted text-center" style="font-size:16px;letter-spacing: 1.5px;">Hood Comedy </td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center">Mount Vic<br>Wellington</td>
				    </tr>
				 
				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">03 </span><span class="text-muted text-capitalize" style="font-size:12px;">  dec</span></th>
				      <td class="text-muted text-center" style="font-size:16px;letter-spacing: 1.5px;">Sing It Wrong</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center">VK's<br>Wellington</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">02 </span><span class="text-muted text-capitalize" style="font-size:12px;">  dec</span></th>
				      <td class="text-muted text-center" style="font-size:16px;letter-spacing: 1.5px;">CORPORATE GIG</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center">Wellington</td>
				    </tr>

					<tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">26 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">the president</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">The Globe<br>Wellington</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">25 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">the president</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">Timaru Boys' High School<br>Wellington</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">25 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">the president(Matinee)</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">Timaru Boys' High School<br>Wellington</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">24 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">the president</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">Pegasus Arms<br>Christchurch</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">19 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">the president</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">Picton Little Theatre<br>Picton</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">17 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">The President Encore (SOLD OUT)</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">Bodega<br>Wellington</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">12 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">The President</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">The Classic Studio<br>Auckland</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">11 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">The President</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">The Classic Studio<br>Auckland</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">10 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">The President</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">The Classic Studio<br>Auckland</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">09 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">Big Wednesday</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">The Classic Studio<br>Auckland</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">09 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">The President</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">The Classic Studio<br>Auckland</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">07 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center" style="font-size:16px;letter-spacing: 1.5px;">CORPORATE GIG</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center">Wellington</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">05 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">The President(SOLD OUT)</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">BATS Theatre<br>Wellington</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">04 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">The President(SOLD OUT)</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">BATS Theatre<br>Wellington</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">03 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">The President(SOLD OUT)</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">BATS Theatre<br>Wellington</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">02 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">The President</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">BATS Theatre<br>Wellington</td>
				    </tr>

				    <tr>
				      <th scope="row" class="text-center"><span style="color:#ec407a;font-size:22px;">01 </span><span class="text-muted text-capitalize" style="font-size:12px;">  nov</span></th>
				      <td class="text-muted text-center text-capitalize" style="font-size:16px;letter-spacing: 1.5px;">The President</td>
				      <td class="text-muted text-center" style="font-size:14px;letter-spacing: 1.5px;" class="text-muted text-center text-capitalize">BATS Theatre<br>Wellington</td>
				    </tr>


















				 </tbody>
			</table>
		</div>
	</div>
	






	
	
		

	<!-- 	</main> --><!-- #main -->
<!-- 	</div> --><!-- #primary -->

<?php
get_sidebar();
get_footer();
