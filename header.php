

!doctype <html>
<html lang="en">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head();?>
	</head>
	<body>

		<header id="header" class="header-fixed">
			<nav class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex align-items-center justify-content-between">
							<a class="navbar-brand d-flex align-items-center" href="<?php echo home_url("/");?>">
						    	<img src="<?php the_field('logo','option');?>" width="30" height="30" alt="">
						    	<?php the_field('title','option');?>
						  	</a>

							<div class="top-bar-right d-flex align-items-center">
								<span class="separator"></span><a href="tel:+360 690 67 89"><?php the_field('number','option');?></a>
							</div>
						</div>
					</div>
				</div>
			</nav><!-- /top-bar -->

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					
                <?php get_search_form();?>

				
                
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"><span class="inner"></span></span>
					  	<span class="icon-bar"><span class="inner"></span></span>
					  	<span class="icon-bar"><span class="inner"></span></span>
				  	</button>

					<div class="collapse navbar-collapse justify-content-end">
						<ul class="navbar-nav d-flex align-items-center">
                        <?php
                                wp_nav_menu( array(
                                    'menu'              => 'primary_menu',
                                    'theme_location'    => 'primary',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => 'collapse navbar-collapse',
                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                    'menu_class'        => 'nav navbar-nav',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker())
                                );
				            ?>
							
								<li class="btn"><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav><!-- /navbar -->
		</header>

		

