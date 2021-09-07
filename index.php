		<?php get_header(); ?>

		<div class="header-gutter"></div>

		<div id="primary" class="site-content">

			<section class="banner">
				<div class="container">
					<div class="banner-slider-wrapper">
						<div class="row">
							<div class="col-lg-5 col-md-5 col-sm-5">
								<div class="slider-content">

									<?php

									if (have_rows('blog_post')) :

										while (have_rows('blog_post')) : the_row();

											$article_img = get_sub_field('article_img');
											$alt_text = get_sub_field('alt_text');
											$entry_title = get_sub_field('entry_title');
											$button_url = get_sub_field('button_url');
											$button_text = get_sub_field('button_text');

									?>
											<article id="post-1" class="blog-post d-flex flex-column flex-wrap  justify-content-between">
												<header class="entry-header" data-animation="fadeInDown" data-delay="0.6s">
													<div class="entry-meta">
														<a href="#">
															<span class="date d-flex align-items-center"><img src="<?php echo $article_img; ?>" class="img-fluid" alt=""><?php echo $alt_text; ?></span>
														</a>
													</div>

													<a href="#">
														<h2 class="entry-title"><?php echo $entry_title; ?></h2>
													</a>
												</header>

												<footer class="entry-footer" data-animation="fadeInUp" data-delay="0.8s">
													<a href="<?php echo $button_url; ?>" class="btn"><?php echo $button_text; ?></a>
												</footer>
											</article><!-- #blog-post- -->

									<?php

										endwhile;
									else :
										"no field found";
									endif;
									?>

								</div>
							</div>

							<div class="col-lg-7 col-md-7 col-sm-7">
								<div class="slider-images">
									<?php

									if (have_rows('blog_image')) :

										while (have_rows('blog_image')) : the_row();


											$banner_img = get_sub_field('banner_image');


									?>
											<div class="slide-item">
												<img src="<?php echo $banner_img; ?>" class="img-fluid" alt="">
											</div>
									<?php

										endwhile;

									else :
										"no field found";
									endif;

									?>

								</div>


								<div class="slider-controls d-flex">
									<button class="arrow prev d-flex align-items-center"></button>
									<button class="arrow next d-flex align-items-center"></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- /banner -->

			<section class="default-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-12">
							<div class="content">
								<?php $about = get_field('about');
								?>
								<h3 class="entry-title"><?php echo $about['heading']; ?></h3>
								<p><?php echo $about['content']; ?></p>

								<span class="separator"></span>
							</div>
						</div><!-- /content -->

						<div class="col-lg-7 col-md-12">
							<h3 class="entry-title"><?php the_field('our_news');?></h3>

							<?php

							// The Query
							$args = array(
								'post_type' => 'post',

							);

							$the_query = new WP_Query($args);

							// The Loop
							if ($the_query->have_posts()) {

								while ($the_query->have_posts()) {

									$the_query->the_post();

							?>

									<article id="post-1" class="blog-post">
										<figure class="media float-left">

											<a href="#"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="feature image"></a>
										</figure>

										<header class="entry-header">
											<div class="entry-meta">
												<a href="#"><span class="date"><?php echo  get_the_title(); ?></span></a>
											</div>

											<a href="#">
												<h2 class="entry-title"><?php echo  get_the_content(); ?></h2>
											</a>
										</header>
									</article><!-- #blog-post- -->


							<?php

								}
							} else {
								echo "no posts found";
							}
							/* Restore original Post Data */
							wp_reset_postdata();
							?>

						</div>
					</div>
				</div>
			</section>

		</div>

		</div>
	</div>
</div>

<?php get_Footer(); ?>