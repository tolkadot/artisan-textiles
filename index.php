<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">
	<main class="site-main" id="main">

<section class="page-title-section bg-grey ptb-std ">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-7 col-sm-12">
        <h1 class="contact-welcome">Notebook</h1>
        <span class="xs-display-none">Read more about our story and the story of the weavers behind our beautiful blankets and scarves</span>
        <div class="sep-wrapper "><hr class="sep"></div>
      </div>
    </div>
  </div>
</section>

<div class="section">
	<div class="container ptb-std" id="content" tabindex="-1">
		<div class="row">
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'blog');
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>



			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->
</div>  <!-- section -->
	</main><!-- #main -->
</div><!-- #index-wrapper -->

<?php get_footer(); ?>
