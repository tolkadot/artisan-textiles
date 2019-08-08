<?php
/**
* Template Name: Our Story
 * @package understrap
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

$email = get_field('email', 43);
$about = get_field('about');
$image = get_field('image');
$welcome= get_field('about_welcome');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

?>

<div class="wrapper ptb-std" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->


			<main class="site-main" id="main">
      <div class="container">
        <div class="row">
        <div class="col-12"><h1 class="contact-header">Our Story</h1></div>
			<div class="col-md-6">

        <p class="contact-welcome"> <?php echo $welcome ?> </p>
        <?php the_field('about'); ?>
        <div class="sep-wrapper "><hr class="sep" /></div>
        <div class="contact-deets">
        <?php if($email) { ?>
        <p class="d-flex">email | <a href="mailto:<?php echo $email ?>"><span class="">&nbsp;<?php echo $email ?></span></a></p>
        <?php } ?>
        </div>
        <?php understrap_tolka_show_social_icons() ?>
      </div>

      <div class="col-md-6">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
</div>
</div>
			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
