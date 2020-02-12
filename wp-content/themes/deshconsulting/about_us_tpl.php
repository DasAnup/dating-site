<?php
/* Template Name: About Us*/  

get_header(); 
global $variable ;
while ( have_posts() ) : the_post(); 
    $feat_about = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
?>
<section class="welcomeSec">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img src="<?php echo $feat_about; ?>" alt="">
				</div>
				<div class="col-md-7">
					<?php the_content();?>
						

					</div>
				</div>
			</div>
		</div>

	</section>
<?php 
endwhile;
get_footer();?>