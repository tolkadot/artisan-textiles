<?php  $image = get_sub_field("image") ?>
<?php  $reverse = get_sub_field("reverse") ?>

<section class="container-fluid fade-me-in">
  <?php  if($reverse) { ?>
    <div class="row row-grid">
    <div class="col-md-7 col-12" class="std-bg" style="background-image:url(<?php echo $image['url']?>); min-height:650px"></div>
    <div class="col-md-5 col-12">
      <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="row">
          <div class="col-md-10">
              <?php  the_sub_field('text') ?>
          </div>
        </div>
      </div>

    </div>
  <?php } else { ?>
    <div class="row row-grid">
    <div class="col-md-5 col-12">
      <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="row">
          <div class="col-md-10 offset-md-2">
              <?php  the_sub_field('text') ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7 col-12" class="std-bg" style="background-image:url(<?php echo $image['url']?>); min-height:650px"></div>

  <?php } ?>

  </div>
</section>
