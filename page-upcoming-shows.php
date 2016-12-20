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
		<div class="row header-upcoming">
			<div class="overlay-upcoming">
				<h1 style="margin:0px; color:white; text-transform: uppercase;">Upcoming Shows</h1>
			</div>
		</div>

		<!-- <div class="container">
			<h1 class="text-center show-main-title">2017 Shows</h1>
			<div id="each-show" class="row " style="height:90px; padding-top:20px;">
				<div class="col-md-2 col-xs-12">
					<div class="col-md-8 text-right " style="color: red;">
						<p class="shows-title">07</p>

					</div>
					<div class="col-md-4 text-left shows-text">Feb 2017</div>
				</div>
				<div class="col-md-8 col-xs-12">
					<div class="col-md-5 text-right " style="color: red;">
						<p class="shows-title">Coastal Comedy (MC)</p>

					</div>
					<div class="col-md-7 text-left">
						<p class="shows-text">Raumati Social Club
							<br>Paraparaumu</p>
					</div>
				</div>
				<div class="col-md-2 col-xs-12"><a class="buy-now" href="#">BUY NOW</a></div>
			</div>
				<div id="each-show" class="row " style="height:90px; padding-top:25px;">
					<div class="col-md-2 col-xs-12">
						<div class="col-md-8 text-right " style="color: red;">
							<p class="shows-title">16</p>

						</div>
						<div class="col-md-4 text-left shows-text">Feb 2017</div>
					</div>
					<div class="col-md-8 col-xs-12">
						<div class="col-md-5 text-right " style="color: red;">
							<p class="shows-title">de Sade</p>

						</div>
						<div class="col-md-7 text-left">
							<p class="shows-text">Cavern Club
								<br>Wellington</p>

							</div>
						</div>
						<div class="col-md-2 col-xs-12"><a class="buy-now" href="#">BUY NOW</a></div>
					</div>
					<div id="each-show" class="row " style="height:90px; padding-top:25px;">
						<div class="col-md-2 col-xs-12">
							<div class="col-md-8 text-right " style="color: red;">
								<p class="shows-title">17</p>

							</div>
							<div class="col-md-4 text-left shows-text">Feb 2017</div>
						</div>
						<div class="col-md-8 col-xs-12">
							<div class="col-md-5 text-right " style="color: red;">
								<p class="shows-title">de Sade</p>

							</div>
							<div class="col-md-7 text-left">
								<p class="shows-text">Cavern Club
									<br>Wellington</p>

								</div>
							</div>
							<div class="col-md-2 col-xs-12"><a class="buy-now" href="#">BUY NOW</a></div>
						</div>
						<div id="each-show" class="row " style="height:90px; padding-top:25px;">
							<div class="col-md-2 col-xs-12">
								<div class="col-md-8 text-right " style="color: red;">
									<p class="shows-title">18</p>

								</div>
								<div class="col-md-4 text-left shows-text">Feb 2017</div>
							</div>
							<div class="col-md-8 col-xs-12">
								<div class="col-md-5 text-right " style="color: red;">
									<p class="shows-title">de Sade</p>

								</div>
								<div class="col-md-7 text-left">
									<p class="shows-text">Cavern Club
										<br>Wellington</p>

									</div>
								</div>
								<div class="col-md-2 col-xs-12"><a class="buy-now" href="#">BUY NOW</a></div>
							</div>
							<div id="each-show" class="row " style="height:90px; padding-top:25px;">
								<div class="col-md-2 col-xs-12">
									<div class="col-md-8 text-right " style="color: red;">
										<p class="shows-title">22</p>

									</div>
									<div class="col-md-4 text-left shows-text">Feb 2017</div>
								</div>
								<div class="col-md-8 col-xs-12">
									<div class="col-md-5 text-right " style="color: red;">
										<p class="shows-title">de Sade</p>

									</div>
									<div class="col-md-7 text-left">
										<p class="shows-text">Cavern Club
											<br>Wellington</p>

										</div>
									</div>
									<div class="col-md-2 col-xs-12"><a class="buy-now" href="#">BUY NOW</a></div>
								</div>
								<div id="each-show" class="row " style="height:90px; padding-top:25px;">
									<div class="col-md-2 col-xs-12">
										<div class="col-md-8 text-right " style="color: red;">
											<p class="shows-title">23</p>

										</div>
										<div class="col-md-4 text-left shows-text">Feb 2017</div>
									</div>
									<div class="col-md-8 col-xs-12">
										<div class="col-md-5 text-right " style="color: red;">
											<p class="shows-title">de Sade</p>

										</div>
										<div class="col-md-7 text-left">
											<p class="shows-text">Cavern Club
												<br>Wellington</p>

											</div>
										</div>
										<div class="col-md-2 col-xs-12"><a class="buy-now" href="#">BUY NOW</a></div>
									</div>
									<div id="each-show" class="row " style="height:90px; padding-top:25px;">
										<div class="col-md-2 col-sm-12">
											<div class="col-md-8 text-right " style="color: red;">
												<p class="shows-title">24</p>

											</div>
											<div class="col-md-4 text-left shows-text">Feb 2017</div>
										</div>
										<div class="col-md-8 col-sm-12">
											<div class="col-md-5 text-right " style="color: red;">
												<p class="shows-title">de Sade</p>

											</div>
											<div class="col-md-7 text-left">
												<p class="shows-text">Cavern Club
													<br>Wellington</p>

												</div>
											</div>
											<div class="col-md-2 col-sm-12"><a class="buy-now" href="#">BUY NOW</a></div>
										</div>
										<div id="each-show" class="row " style="height:90px; padding-top:25px;">
											<div class="col-md-2 col-xs-12">
												<div class="col-md-8 text-right " style="color: red;">
													<p class="shows-title">28</p>

												</div>
												<div class="col-md-4 text-left shows-text">Feb 2017</div>
											</div>
											<div class="col-md-8 col-xs-12">
												<div class="col-md-5 text-right " style="font-size: 32px; color: red;">
													<p class="shows-title">de Sade</p>

												</div>
												<div class="col-md-7 text-left">
													<p class="shows-text">Garnet Station (Auckland)
														<br>Wellington</p>

													</div>
												</div>
												<div class="col-md-2 col-xs-12"><a class="buy-now" href="#">BUY NOW</a></div>
											</div>
											<div id="each-show" class="row " style="height:90px; padding-top:25px;">
												<div class="col-md-2 col-xs-12">
													<div class="col-md-8 text-right " style="color: red;">
														<p class="shows-title">01</p>

													</div>
													<div class="col-md-4 text-left shows-text">Mar 2017</div>
												</div>
												<div class="col-md-8 col-xs-12">
													<div class="col-md-5 text-right " style="color: red;">
														<p class="shows-title">de Sade</p>

													</div>
													<div class="col-md-7 text-left">
														<p class="shows-text">Garnet Station (Auckland)
															<br>Wellington</p>

														</div>
													</div>
													<div class="col-md-2 col-xs-12"><a class="buy-now" href="#">BUY NOW</a></div>
												</div>
												<div id="each-show" class="row " style="height:90px; padding-top:25px;">
													<div class="col-md-2 col-xs-12">
														<div class="col-md-8 text-right " style="color: red;">
															<p class="shows-title">02</p>

														</div>
														<div class="col-md-4 text-left shows-text">Mar 2017</div>
													</div>
													<div class="col-md-8 col-xs-12">
														<div class="col-md-5 text-right " style="color: red;">
															<p class="shows-title">de Sade</p>

														</div>
														<div class="col-md-7 text-left">
															<p class="shows-text">Garnet Station (Auckland)
																<br>Wellington</p>

															</div>
														</div>
														<div class="col-md-2 col-xs-12"><a class="buy-now" href="#">BUY NOW</a></div>
													</div>
													<div id="each-show" class="row " style="height:90px; padding-top:25px;">
														<div class="col-md-2 col-xs-12">
															<div class="col-md-8 text-right " style="color: red;">
																<p class="shows-title">03</p>

															</div>
															<div class="col-md-4 text-left shows-text">Mar 2017</div>
														</div>
														<div class="col-md-8 col-xs-12">
															<div class="col-md-5 text-right " style="color: red;">
																<p class="shows-title">de Sade</p>

															</div>
															<div class="col-md-7 text-left">
																<p class="shows-text">Garnet Station (Auckland)
																	<br>Wellington</p>

																</div>
															</div>
															<div class="col-md-2 col-xs-12"><a class="buy-now" href="#">BUY NOW</a></div>
														</div>
														<div id="each-show" class="row " style="height:90px; padding-top:25px;">
															<div class="col-md-2 col-xs-12">
																<div class="col-md-8 text-right " style="color: red;">
																	<p class="shows-title">04</p>

																</div>
																<div class="col-md-4 text-left shows-text">Mar 2017</div>
															</div>
															<div class="col-md-8 col-xs-12">
																<div class="col-md-5 text-right " style="color: red;">
																	<p class="shows-title">de Sade</p>

																</div>
																<div class="col-md-7 text-left">
																	<p class="shows-text">Garnet Station (Auckland)
																		<br>Wellington</p>

																	</div>
																</div>
																<div class="col-md-2 col-xs-12"><a class="buy-now" href="#">BUY NOW</a></div>
															</div>
			</div>
 -->

	



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
