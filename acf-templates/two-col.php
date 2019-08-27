<?php  $image = get_sub_field("image") ?>
<?php  $reverse = get_sub_field("reverse") ?>

<section class="container-fluid fade-me-in two-col-feature-image">
  <?php  if($reverse) { ?>
    <div class="row row-grid">
    <div class="col-md-7 col-12 std-bg" style="background-image:url(<?php echo $image['url']?>);"></div>
    <div class="col-md-5 col-12">
      <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="row">
          <div class="col-md-10 mt-1 mt-md-0">
              <?php  the_sub_field('text') ?>
          </div>
        </div>
      </div>

    </div>
  <?php } else { ?>
    <div class="row row-grid">
    <div class="col-md-5 col-12 order-2 order-md-1 ">
      <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="row">
          <div class="col-md-10 offset-md-2 mt-1 mt-md-0 ">
              <?php  the_sub_field('text') ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7 col-12 std-bg order-1 order-md-2" style="background-image:url(<?php echo $image['url']?>);"></div>

  <?php } ?>

  </div>
</section>
