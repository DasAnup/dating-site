<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deshconsulting
 */
global $variable;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/ico" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicon.ico">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if(is_front_page()){ ?>
	<section class="banner">
<?php }elseif(is_404()){ ?>
		<section class="banner innerBg" style="background: url(<?php echo IMAGES_PATH; ?>/innerBg.jpg);">
			<h1 class="innerBannerTxt">Page Not Found</h1>
<?php }elseif(is_single()){ ?>
		<section class="banner innerBg" style="background: url(<?php echo get_field('inner_banner',get_the_ID()); ?>);">
			<h1 class="innerBannerTxt"><?php the_title();?></h1>
<?php }else{ ?>
	<section class="banner innerBg" style="background: url(<?php echo get_field('inner_banner',get_the_ID()); ?>);">
	<h1 class="innerBannerTxt"><?php the_title();?></h1>
<?php } ?>

		<header class="headerSec">
			<div class="darkTopSec">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<span><i class="fa fa-paper-plane" aria-hidden="true"></i> <?php echo $variable['address'] ;?></span>
						</div>
						<div class="col-md-6">
							<ul class="contactHeader">
								<li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo $variable['email'] ;?>"><?php echo $variable['email'] ;?></a></li>
								<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <a href="tel:<?php echo $variable['mobile'] ;?>"><?php echo $variable['mobile'] ;?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="mainNavSec">

					<div class="row">
						<div class="col-md-4">
							<a class="logo" href="<?php echo site_url();?>"><img src="<?php echo $variable['logo']['url'] ;?>" alt=""></a>
						</div>
						<div class="col-md-8">
							<nav class="navbar navbar-expand-lg navbar-expand-md ">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
								 aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>

								<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
									<?php
			                            $defaults = array(
			                            'theme_location'  => 'header menu',
			                            'menu'            => '2',
			                            'container'       => '',
			                            'container_class' => '',
			                            'container_id'    => '',
			                            'menu_class'      => 'navbar-nav',
			                            'menu_id'         => '',
			                            'echo'            => true,
			                            'fallback_cb'     => 'wp_page_menu',
			                            'before'          => '',
			                            'after'           => '',
			                            'link_before'     => '',
			                            'link_after'      => '',
			                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			                            'depth'           => 0,
			                            'walker'          => new wp_bootstrap_navwalker()
			                            );
			                            wp_nav_menu($defaults);
			                         ?>
									<a class="nav-item nav-link getaQuote comonBtn" href="#" data-toggle="modal" data-target="#quoteleModal">Get a
										Quote</a>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
<?php if(is_front_page()){ ?>
		<div class="owl-carousel owl-theme" id="sliderSec">
			<?php 
        $args_slider_list = array( 'post_type' => array('slider_list'), 'order_by' => 'id', 'order' => 'ASC', 'posts_per_page'   => -1 );
              $posts_slider_list =  get_posts( $args_slider_list );

        foreach( $posts_slider_list as $myslider_list)                      
        { 

            $feat_image_slider_list = wp_get_attachment_url( get_post_thumbnail_id($myslider_list->ID) ); 
        ?>
			<div class=" item">
				<img src="<?php echo $feat_image_slider_list ;?>" alt="">


			</div>
		<?php } ?>
		</div>

		<div class="bannerTxt">
			<?php the_field('banner_content',39); ?>
			<a class="comonBtn" href="<?php echo get_permalink(8);?>">Contact Now</a>
		</div>
		<div class="triangulo"></div>
	<?php } ?>
		
	</section>
