<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

			<div id="contact_card">
				<div>
					<h2>Stay in touch</h2>
					<span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					</span>
					<form name="contact" method="GET" action="index.html">
						<ul>
<li><input type="text" value="" placeholder="Enter your <input title>..."></li>
						</ul>
					</form>
					<a href="index.html">Sign up to our newsletter</a>
				</div>
			</div>
			<div id="footer">
				<footer class="">
					<ul class="social">
<li><a href="https://www.facebook.com/newrepublique/?fref=ts"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
<li><a href="https://www.linkedin.com/company/new-republique"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
<li><a href="https://www.youtube.com/channel/UCHb09lOf2KIdpmCXSsQoEvA"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
<li><a href="http://www.slideshare.net/nyassini"><i class="fab fa-slideshare"></i><span>Slideshare</span></a></li>
<li><a href="https://www.instagram.com/newrepublique/"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
					</ul>
					<ul class="partners">
<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/aff_max.png"></li>
<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/aff_opt.png"></li>
<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/aff_goo.png"></li>
					</ul>
<hr>
<span id="copyright">&copy; copyright New Republique 2018</span>
				</footer>
			</div>


		</div>
	</div>


<?php wp_footer(); ?>

	<script>
jQuery(document).ready(function() {
	jQuery('#hero_cards > div:even').each(function() {
		jQuery(this).addClass('animatedParent').addClass('animateOnce');
		jQuery(this).find('div:nth-child(1)').eq(0).addClass('animated').addClass('fadeInLeft');
		jQuery(this).find('div:nth-child(2)').eq(0).addClass('animated').addClass('fadeInRight');
	});
	jQuery('#hero_cards > div:odd').each(function() {
		jQuery(this).addClass('animatedParent').addClass('animateOnce');
		jQuery(this).find('div:nth-child(1)').eq(0).addClass('animated').addClass('fadeInRight');
		jQuery(this).find('div:nth-child(2)').eq(0).addClass('animated').addClass('fadeInLeft');
	});
});

jQuery(document).ready(function(){
const $slider = jQuery(".hero_slider");
$slider
	.on('init', () => {
		mouseWheel($slider)
	})
	.slick({
		dots: true,
		appendDots: '#hero_nav',
		arrows: false,
		vertical: true,
		verticalSwiping: true,
		infinite: false
	})
function mouseWheel($slider) {
	jQuery(window).on('wheel', { $slider: $slider }, mouseWheelHandler)
}
function mouseWheelHandler(event) {
	var item_length = jQuery('.slick-track > div').length - 1;
	const $slider = event.data.$slider;
	const delta = event.originalEvent.deltaY;
	if(delta < 0) {
		if ($slider.slick('slickCurrentSlide') > 0) {
			event.preventDefault();
			$slider.slick('slickPrev');
		}
	}
	else {
		if (item_length > $slider.slick('slickCurrentSlide')) {
			event.preventDefault();
			$slider.slick('slickNext');
		}
	}
}

});

	</script>
	</body>
</html>