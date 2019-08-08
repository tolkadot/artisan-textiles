<section class="container top-content pb-std-half pt-std">
  <div class="row">
    <div class="col-12 col-md-10 offset-md-1 p-md-0 text-center intro-extra-padding">

    <?php $page_icon = get_sub_field("main_icon_name"); ?>
    <?php get_icon($page_icon); ?>

    <h1 class="page-heading review-blue text-center pb-30 pt-20">
      <?php the_sub_field("main_heading"); ?>
    </h1>

    <?php the_sub_field("main_content"); ?>

    </div>
  </div>
</section>
