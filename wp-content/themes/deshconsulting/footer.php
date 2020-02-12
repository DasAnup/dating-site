<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deshconsulting
 */
global $variable;
?>

	<section class="getAnappointmnt">
		<div class="container">
			<h2>Get an Appointment by Email</h2>
			<?php echo do_shortcode('[contact-form-7 id="69" title="Get An Appointment"]');?>
	</section>

<footer class="footerSec">
		<div class="container">
			<div class="row">
				<div class="col-md-4 left">
					<div class="headerfootr">
							<img class="footerLogo" src="<?php echo $variable['footerlogo']['url'] ;?>" alt="">
					</div>
					<p> <a href="#">Read More...</a></p>

				</div>
				<div class="col-md-2">
					<div class="headerfootr">
						<h2>Quick Links</h2>
					</div>
					<?php
                                $defaults = array(
                                'theme_location'  => 'Footermenu',
                                'menu'            => '3',
                                'container'       => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'footer-menu-list',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                               // 'walker'          => new wp_bootstrap_navwalker()
                                );
                                wp_nav_menu($defaults);
                             ?>
				</div>

				<div class="col-md-3">
					<div class="headerfootr">
						<h2>Contact</h2>
					</div>
					<ul>
						<li><i class="fa fa-paper-plane" aria-hidden="true"></i> <?php echo $variable['address'] ;?> </li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="tel:<?php echo $variable['mobile'] ;?>"><?php echo $variable['mobile'] ;?></a></li>
						<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <a href="mailto:<?php echo $variable['email'] ;?>">
								<?php echo $variable['email'] ;?></a></li>
					</ul>
				</div>

				<div class="col-md-3">
					<div class="headerfootr last">
						<h2>Find Us</h2>
					</div>
					 <?php echo $variable['map'] ;?>
				</div>

			</div>
		</div>
		<p class="copyright">Copyright &#169; <?php echo date('Y');?> All Rights Reserved. Designed by <a href="http://vtdesignz.com" rel="nofollow">VTDESIGNZ</a></p>
	</footer>
	<div class="modal fade" id="quoteleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Request a Quote</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times"></i> </button>
				</div>
				<div class="modal-body">
					<?php echo do_shortcode('[contact-form-7 id="68" title="Get A Quote"]');?>
				</div>
			</div>
		</div>
	</div>
<?php wp_footer(); ?>

</body>
</html>
