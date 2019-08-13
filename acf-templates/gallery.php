<?php $image1 = get_sub_field("image_1") ?>
<?php $image2 = get_sub_field("image_2") ?>
<?php $image3 = get_sub_field("image_3") ?>
<?php $image4 = get_sub_field("image_4") ?>

<section id="gallery" class= "gallery ptb-std gradient-bg">
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <h2 class="intro-heading pb-std-half">Our latest products</h2>
      </div>
      <div class="square-container w-100">
        <div class="square">
          <div class="content">
          <img src="<?php echo $image1['url'] ?>" alt="<?php echo $image1['alt'] ?>"/>
          </div>
        </div>
        <div class="square">
          <div class="content">
            <div class="square-container w-100">
              <div class="square"><div class="content">
                <img src="<?php echo $image1['url'] ?>" alt="<?php echo $image1['alt'] ?>"/>
              </div></div>
                <div class="square"><div class="content">
                  <img src="<?php echo $image1['url'] ?>" alt="<?php echo $image1['alt'] ?>"/>
                </div></div>
                <div class="rectangle"><div class="content">
                  <img src="<?php echo $image1['url'] ?>" alt="<?php echo $image1['alt'] ?>"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 d-flex justify-content-center pt-std-half">
        <a href="/shop" class="btn-primary text-decoration-none">See more</a>
      </div>
    </div>
  </div>
</section>
