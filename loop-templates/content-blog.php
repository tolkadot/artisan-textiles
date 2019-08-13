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
<?php $author = get_the_author(); r ?>
<div class="col-md-6" >
  <article <?php post_class("w-100"); ?> id="post-<?php the_ID(); ?>">

     <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
     <div class="meta mt-3"><span class="meta-author"><?php echo $author ?></span><span>|</span><span class="meta-date"><?php echo get_the_date(); ?></span></div>

     <div class="post-title"><h3 class="contact-header"><?php the_title(); ?></h3></div>

      <div class="entry-content">
        <?php the_excerpt(); ?>
      </div><!-- .entry-content -->

  </article><!-- #post-## -->
</div>
