<?php $layout = get_sub_field("layout_options") ?>


<section class="generic-content ptb-std-half">
  <div class="container generic-content">
    <div class="row row-grid">
      <?php if($layout == "One Column") { ?>
        <div class="col-12">
          <?php the_sub_field("one_column_layout") ?>
        </div>
      <?php  } elseif(($layout == "Two Column")) { ?>
      <div class="col-md-6">
        <?php the_sub_field("two_column_layout_lhs_column") ?>
      </div>
      <div class="col-md-6">
        <?php the_sub_field("two_column_layout_rhs_column_copy") ?>
      </div>
    <?php } ?>
    </div>
  </div>
</section>
