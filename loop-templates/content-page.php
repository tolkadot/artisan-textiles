<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<section class="pt-std">
  <div class="container">
    <div class="row">
      <article <?php post_class("w-100"); ?> id="post-<?php the_ID(); ?>">

	     <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	     <div class="entry-content">

		  <?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
</div>
</div>
</section>
