<?php
/* Template Name: For Enterprise page */
get_header(); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()."/assets/slick/slick.css?v2022"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()."/assets/slick/slick-theme.css?v2022"); ?>">
<style>

.slider {
        width: 100%;
        margin: 50px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }


    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
   }
    
   .slide {
  height: 100%;
}
  </style>
  <main>

  <section class="contact-hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h4 class="yellow-text"><?php echo get_field('banner_sub_title'); ?></h4>
          <h1> <?php echo get_field('banner_text'); ?></h1>
          <p class="lead"><?php echo get_field('banner_description'); ?></p>
          <a href="<?php echo get_field('link_href'); ?>" class="btn btn-yellow"><?php echo get_field('link_text_banner'); ?></a>
        </div>
        <div class="col-md-6">
          <img src="<?php echo get_field('banner_image'); ?>" class="img-fluid">
        </div>
      </div>

    </div>
      </div>

    </div>
  </section>
  <section class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="h1 mb-5"><?php echo get_field('title_our_product_fe'); ?>​</h2>

        </div>
      </div>
      <div class="our-product-slide regular slider">


      <?php
    if (have_rows("products_fe")):
                            while (have_rows("products_fe")):
                                the_row(); ?>
        <div class="pdt">
            <div class="pink-card text-center">
                <img src="<?php echo get_sub_field('image_p_fe'); ?>" width="80">
                <h5 class="mt-3"><?php echo get_sub_field('title_p_fe'); ?></h5>
                <p class="mt-3 mb-0"><?php echo get_sub_field('description_p_fe'); ?>

                </p>
              </div>
        </div>
        <?php
      
                    endwhile;
                endif; ?>
      
      </div>
    </div>
  </section>
  
  <section class="bg-dark-pattern">
    <div class="container">
      <div class="row align-items-lg-center">
       
        <div class="col-md-7">
            <p class="h5"><?php echo get_field('sub_title_e_fe'); ?>​</p>
            <h2 class="h1 w-75"><?php echo get_field('title_e_fe'); ?></h2>
         
             <p class="lead"><?php echo get_field('description_e_fr'); ?></p>
        </div>
        <div class="col-md-5 nomobileview">
          <img src="<?php echo get_field('image_e_fr'); ?>" width="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light">
    <div class="container">
      <div class="row align-items-lg-center">
       
        <div class="col-md-7">
            <p class="h5"><?php echo get_field('sub_title_e_fe_2'); ?></p>
            <h2 class="h1 w-75"><?php echo get_field('title_e_fe_copy_2'); ?></h2>
         
             <div class="lead"><?php echo get_field('description_e_fr_copy_2'); ?></div>
        </div>
       <!-- <div class="col-md-5">
          <img src="<?php echo get_field('image_e_fr_2'); ?>" width="" class="img-fluid">
        </div> -->
      </div>
    </div>
  </section>

  <section class="bg-dark-pattern">
    <div class="container">
    
        <div class="row time-for-change mb-5">
            <div class="col-12">
                <h2 class="h1 mb-5"><?php echo get_field('title_c_fe'); ?></h2>
            </div>
            <?php
            $class_panel = array('pink-card','purple-card','blue-card','yellow-card');
     $i=0;
    if (have_rows("critical_time_panel_fe")):
                            while (have_rows("critical_time_panel_fe")):
                                the_row(); ?>
            <div class="col-md-3 d-flex">
                <div class="<?php echo $class_panel[$i]; ?> text-center">
                    <h3 class="mb-3"><?php echo get_sub_field('title_sb_ct') ?></h3>
                    <p class="mb-3"><?php echo get_sub_field('description_sb_ct') ?></p>
                  </div>
            </div>   
            <?php
                     $i++;
                    endwhile;
                endif; ?>        
        </div>

      <div class="row align-items-lg-center">
       <div class="col-md-7">
            <p class="h5"><?php echo get_field('critical_editorial_title_panel'); ?></p>
            <h2 class="h1 w-75"><?php echo get_field('critical_sub_title_fi'); ?></h2>
         
             <div class="lead"><?php echo get_field('critical_editorial_description'); ?></div>
        </div>
        <div class="col-md-5">
          <img src="<?php echo get_field('critical_time_image'); ?>" width="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 home-contact">
        <h3>Ready to Get Started?</h3>
          <p>Futureproof your Cybersecurity workforce</p>
          <div class="home-contact-form">
               
                       <?php echo do_shortcode('[contact-form-7 id="6a50f3b" title="Contact form 1"]');  ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <?php get_footer(); ?>
