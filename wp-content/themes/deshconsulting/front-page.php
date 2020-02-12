<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
global $variable ;
get_header(); ?>
<section class="welcomeSec">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img src="<?php the_field('welcome_image',39);?>" alt="">
				</div>
				<div class="col-md-7">
					<?php the_field('welcome_content',39);?>
						<a class="comonBtn" href="<?php echo get_permalink(6);?>">Know more</a>

					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="ourService" style="background: url(<?php echo IMAGES_PATH;?>/serviceBg.jpg);">

		<div class="container">
			<h2>Our Services</h2>
			<h3>We provide expert tax and advisory services to individuals and small businesses.</h3>
			<div class="owl-carousel owl-theme" id="serviceSlide">
							 <?php 
			        $args_service_list = array( 'post_type' => array('service_list'), 'order_by' => 'id', 'order' => 'ASC', 'posts_per_page'   => 4 );
			              $posts_service_list =  get_posts( $args_service_list );

			        foreach( $posts_service_list as $myservice_list)                      
			        { 

			            $feat_image_service_list = wp_get_attachment_url( get_post_thumbnail_id($myservice_list->ID) ); 
			        ?>
				<div class=" item">
					<div class="box">
						<img src="<?php echo $feat_image_service_list ;?>" alt="">
						<h4><?php echo get_post_field('post_title',$myservice_list->ID); ?></h4>
						<?php echo get_post_field('post_content',$myservice_list->ID); ?>
						<a class=" comonBtn" href="<?php echo get_permalink($myservice_list->ID);?>">Explore</a>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
		<div class="triangulo"></div>
	</section>

	<section class="ourmission">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<span class="sideBoreder"><img src="<?php echo IMAGES_PATH;?>/ourMission.jpg" alt=""></span>
				</div>

				<div class="col-md-6 col-sm-6">
					<?php the_field('our_mission_content');?>

					<ul>
						<?php
                        if( have_rows('our_mission',39) ){
                        while ( have_rows('our_mission',39) ){ the_row();
                        $image= get_sub_field('mission_image',39);
                        $content= get_sub_field('mission_content',39);
                        ?>
						<li>
							<span class="iconSec"><img src="<?php echo $image; ?>" alt=""></span>
							<div class="textSe">
								<?php echo $content; ?>

							</div>
						</li>
					<?php } } ?>

						<!-- <li>
							<span class="iconSec"><img src="images/mission-icn3.png" alt=""></span>
							<div class="textSe">
								<h4>High Successful Recovery</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
						</li> -->
					</ul>
					<div class="text-center">
						<a class=" comonBtn" href="<?php echo get_permalink(6);?>">Know More</a>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="successBusn">
		<img class="bannerImg" src="<?php the_field('business_image',39);?>" alt="">
		<div class="container">

			<div class="row">
				<div class="col-md-5 order-md-last">

				</div>
				<div class="col-md-7">
					<?php the_field('business_content',39);?>
					<hr>
					<a class=" comonBtn" href="<?php echo get_permalink(6);?>">Read More</a>
				</div>
			</div>

		</div>

	</section>

	<?php get_footer();