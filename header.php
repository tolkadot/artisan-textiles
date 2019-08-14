<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">


<!-- <?php if(is_front_page()){ ?>

      <div class="container-fluid top-bar bg-primary">
          <div class="container">
            <div class=" row">
              <div class="col-12 d-flex justify-content-between  ">
                <p><a class="white" href="#"> Free Shipping for every order</a></p>
                <div class="d-none d-lg-block white"><?php tolka_wc_show_cart() ?> </div>
              </div>
            </div>
        </div>
      </div>
      <?php } ?> -->
	<!-- ******************* The Navbar Area ******************* -->

	<div id="wrapper-navbar" class="w-100 " itemscope itemtype="http://schema.org/WebSite">
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		<nav class="navbar navbar-expand-lg" data-toggle="affix">

			<div class="container-fluid ">

					<!-- Your site title as branding in the menu -->

					<?php if ( ! has_custom_logo() ) { ?>
            <div>
            <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
            <!-- <p class="secondary-header ">costumer</p> -->
            </div>



					<?php } else { ?>
          <div class="d-flex flex-column flex-sm-row logo-box justify-content-lg-start justify-content-center align-items-center">
					 <?php	the_custom_logo(); }?>
            <p class="logo-font d-flex justify-content-center align-items-center mb-0"> artisan textiles </p>
          </div>

    <div class="d-flex nav-cart-box justify-content-between align-items-center">
      <div class="d-lg-none"><?php tolka_wc_show_cart() ?> </div>
      <button class="navbar-toggler align-self-start" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>



				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
         <span class="nav-moving-target"></span>
      <div class="d-none d-lg-block"><?php tolka_wc_show_cart() ?> </div>


			</div><!-- .container -->

		</nav><!-- .site-navigation -->
	 </div><!-- #wrapper-navbar end -->
  </div>
<?php if(is_front_page()){ ?>
<!-- <div class="container-fluid vh-100 home-hero">
  <div class="row">
	 </div>
  </div> -->


  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <!-- <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol> -->
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('http://artisantextiles.local/wp-content/uploads/2019/08/artisan-textiles-hero.jpg')">
          <div class="carousel-caption text-right">
            <h2 class="contact-welcome white d-none d-md-block">A gift that gives back.</h2>
            <p class="white d-none d-md-block">Handmade, Ethical & Sustainable.</p>
            <a class="btn-tertiary text-decoration-none " href="/shop">See Collection</a>
          </div>.
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://artisantextiles.local/wp-content/uploads/2019/08/Slider1.jpg')">
          <div class="carousel-caption  text-right">
            <h2 class="contact-welcome white d-none d-md-block"> Eco friendly dyes.</h2>
            <p class="white d-none d-md-block"> Caring for Cambodian rivers.</p>
            <a class="btn-tertiary text-decoration-none " href="/shop">See Collection</a>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://artisantextiles.local/wp-content/uploads/2019/08/Slider2.jpg')">
          <div class="carousel-caption  text-right">
            <h2 class="contact-welcome white d-none d-md-block">Fairtrade values. </h2>
            <p class="white d-none d-md-block">Caring for the women who create our textiles.</p>
            <a class="btn-tertiary text-decoration-none " href="/shop">See Collection</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
      </a>
    </div>
  </header>


<?php } ?>
