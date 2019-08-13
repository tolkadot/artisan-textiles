<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper p-0" id="page-wrapper">

	<div class="content" id="content" tabindex="-1">

			<main class="site-main" id="main">
<!-- First loop - renders woocommerce shortcodes -->


<!-- Second loop - renders acf content blocks  -->
    <?php if( get_field('content') ): ?>
			<?php	while(has_sub_field("content")): ?>

          <?php if(get_row_layout() == "three_column_layout"): //  ?>
                   <?php get_template_part( 'acf-templates/three-col-layout' ); ?>

            <?php elseif(get_row_layout() == "featured_text"): // ?>
                     <?php get_template_part( 'acf-templates/featured-content' ); ?>

          <?php elseif(get_row_layout() == "generic_content"): // ?>
                   <?php get_template_part( 'acf-templates/generic-content' ); ?>

          <?php elseif(get_row_layout() == "padding"): // ?>
                   <?php get_template_part( 'acf-templates/padding' ); ?>

          <?php elseif(get_row_layout() == "full_width"): // ?>
                   <?php get_template_part( 'acf-templates/full-width' ); ?>

        <?php elseif(get_row_layout() == "two_col_full_width"): // ?>
                   <?php get_template_part( 'acf-templates/two-col' ); ?>
        <?php elseif(get_row_layout() == "image_gallery"): // ?>
                            <?php get_template_part( 'acf-templates/gallery' ); ?>
        	<?php endif; ?>


      <?php endwhile; ?>
    <?php else : ?>

    <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'loop-templates/content', 'page' ); ?>

    <?php endwhile; // end of the loop. ?>

    <?php endif; ?>
			</main><!-- #main -->


	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
