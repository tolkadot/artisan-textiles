<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>



<div class="wrapper p-0" id="wrapper-footer">
<section class="ptb-std-half">
  <div class="container">
		<div class="row">
      <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <h3 class="footer-heading text-center text-sm-left"> Sign up for our Newsletter</h3>
        <p>Please sign up to our newsletter to be the first to know about our special offers, new products, competitions and behind the scenes updates.</p>

        <?php get_template_part( 'global-templates/newsletter', 'signup' ); ?>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-4">

        <?php wp_nav_menu( array(
         'theme_location' => 'footer-menu',
         'menu_id' => 'footer-menu',
         ) ); ?>
      </div>
      <div class="col-12 col-lg-4">

        <?php understrap_tolka_show_social_icons() ?>
      </div>
		</div><!-- row end -->
	</div><!-- container end -->
</section>
<footer class="site-footer bg-primary" id="colophon">
	<div class="container">
		<div class="row">
    <div class="col-md-12">
					<div class="site-info d-flex justify-content-between flex-column flex-md-row">
          <?php
          $thisyear = date("Y");
          $copyright = " Copyright &copy; " . $thisyear . "";
          ?>
          <p class="mb-0"><small><?php echo $copyright ?> </small></p>
          <p class="mb-0"><small>website by <a href="https://tolka.io">tolka</a></small></p>
					</div><!-- .site-info -->
			</div><!--col end -->
		</div><!-- row end -->
	</div><!-- container end -->
</footer><!-- #colophon -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script>
jQuery( document ).ready( function( $ ) {

});
</script>
</body>

</html>
