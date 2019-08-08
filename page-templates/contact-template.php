<?php
/**
* Template Name: Conatct Page
 * @package understrap
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

$email = get_field('email');
$phone = get_field('phone');
$welcome = get_field('contact_welcome');
?>

<div class="wrapper ptb-std" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->


	<main class="site-main w-100" id="main">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="contact-header">Contact</h1>
        </div>
  		   <div class="col-md-6">
          <p class="contact-welcome"> <?php echo $welcome; ?> </p>
          <div class="sep-wrapper "><hr class="sep" /></div>
            <div class="contact-deets">
              <?php if($email) { ?>
                <p class="d-flex">email | <a href="mailto:<?php echo $email ?>"><span class="">&nbsp;<?php echo $email ?></span></a></p>
                <?php understrap_tolka_show_social_icons() ?>
              <?php } ?>
            </div>
           </div>
          <div class="col-md-6">
            <?php echo do_shortcode( '[contact-form-7 id="8" title="Main contact form"]' ); ?>
          </div>
      </div>
    </div>
	</main><!-- #main -->

			<!-- Do the right sidebar check -->


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
