<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">
	<main class="site-main" id="main">
    <section class="error-404 not-found ptb-std">
	   <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		    <div class="row">
			    <div class="col-md-12 content-area" id="primary">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'That page can&rsquo;t be found.', 'understrap' ); ?></h1>
						</header><!-- .page-header -->
						<div class="page-content">

							<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'understrap' ); ?></p>

              <p class="py-3"><a class="btn-secondary text-decoration-none " href="/shop">Browse Collection</a></p>

						</div><!-- .page-content -->
			    </div><!-- #primary -->
		    </div><!-- .row -->
      </div><!-- #content -->
    </section><!-- .error-404 -->
    <section class="featured-products ptb-std gradient-bg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="text-center intro-heading m-0 pb-std-half"> Featured products</p>
              <?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity" class="homepage-products" ]')  ?>
            <p style="text-align: center;" class="py-3"><a class="btn-secondary text-decoration-none " href="/shop">See Collection</a></p>
          </div>
        </div>
      </div>
    </section>
 </main>
</div><!-- #error-404-wrapper -->

<?php get_footer(); ?>
