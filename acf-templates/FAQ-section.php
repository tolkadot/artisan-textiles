<?php $faq_counter = 0; ?>

<section class= "faq-section ptb-std">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div id="accordion">
            <?php if( have_rows('faq_pair') ):
            
            while ( have_rows('faq_pair') ) : the_row(); ?> 
              <?php  if ($faq_counter != 0)  {
                   $showme = ""  ;
                   $collapsed = "collapsed";
               }
               else {
                $showme = "show";
                $collapsed = "";
               } ?>
               <div class="faq-border my-3">
                    <div class="card border-0 ">
                        <div class="" id="heading-<?php echo $faq_counter ?>"> 
                            <div  data-toggle="collapse" data-target="#collapse-<?php echo $faq_counter ?>" aria-expanded="true" aria-controls="collapse-<?php echo $faq_counter ?>" class="<?php echo $collapsed ?>">      
                                <h3 class="faq-heading mb-3">
                                    <?php the_sub_field("question"); ?>
                                </h3>
                            </div>
                        </div>
                    </div>   
                    <div id="collapse-<?php echo $faq_counter ?>" class="collapse <?php echo $showme ?>" aria-labelledby="heading-<?php echo $faq_counter ?>" data-parent="#accordion">
                        <div class="">
                            <p>
                                <?php the_sub_field("answer"); ?>
                            </p> 
                        </div>
                    </div> 
                </div> 
                <?php $faq_counter ++;  ?>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>



