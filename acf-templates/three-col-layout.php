<section class="container ptb-std-half">
  <div class="row row-grid">
    <?php if( have_rows('column') ):
      while ( have_rows('column') ) : the_row(); ?>
        <div class="col-md-4 col-sm-12 col-12">
          <h3 class="paragraph-heading review-blue">
            <?php the_sub_field("column_heading"); ?>
          </h3>
          <p>
            <?php the_sub_field("column_body"); ?>
          </p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
