<?php
/* Template Name: Contact Us*/  

get_header(); 
global $variable ;
while ( have_posts() ) : the_post(); 
    // $feat_about = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
?>
		<section class="contactUs p-5 ">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-6 ">

					 <?php echo $variable['map'] ;?>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-6">
					<div class="contact-form">
						Please help us serve you better by sharing the following information.
						<div class="row">
							<?php echo do_shortcode('[contact-form-7 id="67" title="Contact Us"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
<?php 
endwhile;
get_footer();?>