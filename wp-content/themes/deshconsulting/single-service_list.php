<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 
while ( have_posts() ) : the_post(); 
 $feat_service = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
?>
<section class="ourService innerService innerServiceDetails">

		<div class="container">
			<h2>Service Details</h2>
			<h3>We provide expert tax and advisory services to individuals and small businesses.</h3>

			<div class="row">
				<div class="col-md-4">
					<div class="box">
						<img src="<?php echo $feat_service; ?>" alt="">

					</div>
				</div>
				<div class="col-md-8">
					<div class="box">
							<h4><?php the_title();?></h4>
							<?php the_content();?>
					</div>
				</div>


			</div>

		</div>
		<div class="triangulo"></div>
	</section>
<?php 
endwhile;
get_footer();