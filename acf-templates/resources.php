<section class="resources ptb-std-half">
<div class="container">
  <div class="row">
    <div class="col-12">
    <?php the_sub_field("resources_heading"); ?>
    </div>
  </div>
</div>

  <div class="container">
    <div class="row row-grid">

    <?php if( have_rows('resources_content') ):
      while ( have_rows('resources_content') ) : the_row(); ?>
      <?php $file_link = get_sub_field('link_url'); ?>
      <?php $file_url = $file_link['url']; ?>


          <div class="col-md-4 col-lg-4 p-lr-9 py-3">
            <p class="page-heading">
            <?php the_sub_field("number") ?>
            </p>
            <p class="pb-15">
              <span class="bold-text"><?php the_sub_field('bold_text'); ?></span><?php the_sub_field('regular_text'); ?>
            </p>
            <div class="d-flex">
              <a href="<?php echo $file_url ?>" download>
                <img class="download-icon pr-20" src="<?php echo get_template_directory_uri(); ?>/icons/download-document.svg">
              </a>
              <a class="review-purple" href="<?php echo $file_url ?>"  download> <?php the_sub_field('link_title'); ?></a>
            </div>
          </div>

      <?php endwhile; ?>
    <?php endif; ?>

    </div>
  </div>
</section>
