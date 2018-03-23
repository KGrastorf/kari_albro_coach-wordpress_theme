<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kari_Albro_Coaching
 */

?>

</div>
</div>
<?php wp_footer(); ?>
<footer id="site-footer">

	<!-- <div class="footer-spacer-top"></div>
	<a class="footer-fb" target="_blank" href="https://www.facebook.com/karialbrocoaching/"><img class="fb" src="<?php bloginfo('stylesheet_directory'); ?>/images/face-icon.png" alt=""></a>
	<a class="footer-in" target="_blank"href="https://www.instagram.com/karialbrocoaching/"><img class="in" src="<?php bloginfo('stylesheet_directory'); ?>/images/inst-icon.png" alt=""></a>
	<a class="footer-tw" target="_blank"href="https://twitter.com/KariAlbro"><img class="tw" src="<?php bloginfo('stylesheet_directory'); ?>/images/twit-icon.png" alt=""></a>
	<p class="footer">Coaching with Kari Albro</p>
	<div class="footer-spacer-bottom"></div> -->
  <div class="legal">
    <p class="copy">&copy;2018 Kari Albro Coaching</p>
    <p class="rights">All Rights Reserved</p>
    <?php echo do_shortcode("[addthis tool=addthis_horizontal_follow_toolbox]"); ?>
    <a class="kevin" href="https://kevingrastorf.com" target="_blank">Built by Kevin Grastorf Web Developer</a>
  </div>

</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/app.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/nav.js"></script>


</body>

</html>
