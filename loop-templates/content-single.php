<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php $author = get_the_author();  ?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<section class="page-title-section bg-grey ptb-std ">
			<div class="container">
				<div class="row">
				<div class="col-lg-8 col-md-7 col-sm-12">
					<h1 class="contact-welcome"><?php the_title() ?></h1>
					<div class="meta mt-3"><span class="meta-author"><?php echo $author ?></span><span>|</span><span class="meta-date"><?php echo get_the_date(); ?></span></div>
					<div class="sep-wrapper "><hr class="sep"></div>
				</div>
				</div>
			</div>
		</section>
	</header><!-- .entry-header -->
	
	<section class="page-title-section ptb-std ">
		<div class="container">
			<div class="row">
				
				<div class="col-12 col-md-6">
				<div class="entry-content">
			
					<?php $url = get_field('link_to_collection') ?>
					<p class="pull-text"><?php the_field('pull_text')?></p>
					<?php the_content(); ?>

					<p class="py-3" style="text-align: center;">
						<a class="btn-secondary text-decoration-none" href="<?php echo $url ?>">See Collection</a>
					</p>

					<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->
				</div><!-- col-6 -->

				<div class="col-12 col-md-6">

				<?php if( have_rows('blog_images') ): ?>

					<?php while ( have_rows('blog_images') ) : the_row(); ?> 

						<?php $image = get_sub_field('image'); ?>

						<img class="w-100 mb-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endwhile; ?>
            	<?php endif; ?>
				</div> <!-- col-6 -->

			</div> <!-- row -->
		</div>
	</section>


	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
