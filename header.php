<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package MarketErector
*/

?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<section class="digital-header-top-part">
		<div class="digital-marketing-wrapper">
			<div class="container-fluid top-head-color">
				<div class="row">
					<div class="col-md-6">
					<?php	global $redux_demo; ?>
						<div class="top-header-left text-center">
							<ul class="list-inline">
								<li class="list-inline-item">
									<i class="far fa-envelope"></i>
								</li>
								<li class="list-inline-item">
									<span class="envelope"><?php echo $redux_demo['email-text']; ?></span>
								</li>
								<li class="list-inline-item">
									<span class="fas fa-phone-volume"></span>
								</li>
								<li class="list-inline-item">
									<span class="phone">Phone <?php echo $redux_demo['phone-text']; ?></span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="top-header-right text-center">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="<?php echo $redux_demo['facebook-link']; ?>">
									<span class="top-back-round"><i class="fab fa-facebook-f"></i></span>
								</a></li>
								<li class="list-inline-item"><a href="<?php echo $redux_demo['twitter-link']; ?>">
									<span class="top-back-round"><i class="fab fa-twitter"></i></span>
								</a></li>
								<li class="list-inline-item"><a href="<?php echo $redux_demo['linkdin-link']; ?>">
									<span class="top-back-round"><i class="fab fa-linkedin-in"></i></span>
								</a></li>
								<li class="list-inline-item"><a href="<?php echo $redux_demo['instragram-link']; ?>">
									<span class="top-back-round"><i class="fab fa-pinterest-p"></i></span>
								</a></li>
								<li class="list-inline-item"><a href="<?php echo $redux_demo['pintarest-link']; ?>">
									<span class="top-back-round"><i class="fab fa-instagram"></i></span>
								</a></li>

								<li class="list-inline-item"><a href="#"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Menu part -->
	<section class="digital-header-menu-part">
		<div class="digital-marketing-wrapper">
			<div class="container-fluid menu-bg-color">
				<div class="row">
					<div class="col-md-4">
						<div class="logo-image">
							<?php if(has_custom_logo()):
			              the_custom_logo();
			            else:
		             	echo  "<a href='".home_url("/")."'>".get_bloginfo('name')."</a>";
		             ?>
		 <?php endif; ?>
						</div>
					</div>
					<div class="col-md-8">
						<div class="main-menu text-center">
						<?php	wp_nav_menu(array(
									 'theme_location' => 'menu-1',
									 'menu_class'=>'list-inline',
									 'container' => ''
							 ) ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="digital-menu-part">
		<div class="row">
			<div class="container-fluid">
				<div class="main-image">
					<?php
                echo do_shortcode('[smartslider3 slider=1]');
          ?>
				</div>

			</div>
		</div>
	</section>
