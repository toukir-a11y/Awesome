		<?php get_header();?>
		
		<div class="header-gutter"></div>

		<div id="primary" class="site-content">

			<section class="banner">
				<div class="container">
					<div class="banner-slider-wrapper">
						<div class="row">
							<div class="col-lg-5 col-md-5 col-sm-5">
								<div class="slider-content">
									
								<?php
																
								if( have_rows('blog_post') ):

									while( have_rows('blog_post') ) : the_row();

									  $article_img= get_sub_field('article_img');	
									  $alt_text= get_sub_field('alt_text');
									  $entry_title= get_sub_field('entry_title');
									  $button_url= get_sub_field('button_url');
									  $button_text= get_sub_field('button_text');
									  
									?>
									<article id="post-1" class="blog-post d-flex flex-column flex-wrap  justify-content-between">
										<header class="entry-header" data-animation="fadeInDown" data-delay="0.6s">
											<div class="entry-meta">
												<a href="#">
													<span class="date d-flex align-items-center"><img src="<?php echo $article_img;?>" class="img-fluid" alt=""><?php echo $alt_text;?></span>
												</a>
											</div>

											<a href="#"><h2 class="entry-title"><?php echo $entry_title;?></h2></a>
										</header>

										<footer class="entry-footer" data-animation="fadeInUp" data-delay="0.8s">
											<a href="<?php echo $button_url;?>" class="btn"><?php echo $button_text;?></a>
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
					
								if( have_rows('blog_image') ):

									while( have_rows('blog_image') ) : the_row();

										
									  $banner_img= get_sub_field('banner_image');


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
								<?php  $about= get_field('about');?>
								<h3 class="entry-title"><?php echo $about ['title'];?></h3>
								<p><?php echo $about['content'];?></p>

								<span class="separator"></span>
							</div>
						</div><!-- /content -->

						<div class="col-lg-7 col-md-12">
							<h3 class="entry-title">Our News</h3>

							<article id="post-1" class="blog-post">
								<figure class="media float-left">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>../images/post-thumb-1.jpg" class="img-fluid" alt=""></a>
								</figure>

								<header class="entry-header">
									<div class="entry-meta">
										<a href="#"><span class="date">26, November 2019</span></a>
									</div>

									<a href="#"><h2 class="entry-title">More school leaders need to elevate the conversation that where students learn matters. Because when school leaders establish intentional school design.</h2></a>
								</header>
							</article><!-- #blog-post- -->

							<article id="post-1" class="blog-post">
								<figure class="media float-left">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>../images/post-thumb-2.jpg" class="img-fluid" alt=""></a>
								</figure>

								<header class="entry-header">
									<div class="entry-meta">
										<a href="#"><span class="date">20, September 2019</span></a>
									</div>

									<a href="#"><h2 class="entry-title">Growing the influence of student voice over the essential elements of teaching and learning has always been appealing for school leaders.</h2></a>
								</header>
							</article><!-- #blog-post- -->
						</div>
					</div>
				</div>
			</section><!-- /default-page -->

		</div><!-- /primary -->

		<?php $new= get_field('about');
							var_dump($new);
							?>


		</div>
	</div>
</div>




		
		<?php get_Footer();?>
