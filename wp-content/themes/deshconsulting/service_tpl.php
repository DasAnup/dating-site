<?php
/* Template Name: Service*/  

get_header(); 
global $variable ;
while ( have_posts() ) : the_post(); 
    // $feat_about = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
?>
<section class="ourService innerService" >

		<div class="container">
			<h2>Our Services</h2>
			<h3>We provide expert tax and advisory services to individuals and small businesses.</h3>

			<div class="row">
				 <?php 
			        $args_service_list = array( 'post_type' => array('service_list'), 'order_by' => 'id', 'order' => 'ASC', 'posts_per_page'   => 4 );
			              $posts_service_list =  get_posts( $args_service_list );

			        foreach( $posts_service_list as $myservice_list)                      
			        { 

			            $feat_image_service_list = wp_get_attachment_url( get_post_thumbnail_id($myservice_list->ID) ); 
			        ?>
				<div class="col-md-4">
					<div class="box">
						<img src="<?php echo $feat_image_service_list ;?>" alt="">
						<h4><?php echo get_post_field('post_title',$myservice_list->ID); ?></h4>
						<?php echo get_post_field('post_content',$myservice_list->ID); ?>
						<a class=" comonBtn" href="<?php echo get_permalink($myservice_list->ID);?>">Explore</a>
					</div>
				</div>
			<?php }  ?>


			</div>

		</div>
		<div class="triangulo"></div>
	</section>
<?php 
endwhile;
get_footer();?>