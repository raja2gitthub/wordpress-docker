<?php 
/* Template Name: For Univertsity page */

get_header(); ?>
<main>
  <section class="home-hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h4 class="yellow-text"> <?php echo get_field('banner_sub_title'); ?></h4>
          <h1>
          <?php echo get_field('banner_text'); ?>
          </h1>
          <p class="lead">  <?php echo get_field('banner_description'); ?></p>
         
        </div>
        <div class="col-md-6">
          <img src="<?php echo get_field('banner_image'); ?>" class="img-fluid">
        </div>
      </div>

    </div>
  </section>
<style>
  .what-we-do{
    padding:40px 0px;
  }
  </style>
  <section class="what-we-do">
    <div class="container">
        <div class="row align-items-center d-flex pt-10 pb-10">
            <div class="col-md-4">
                <img src="<?php echo get_field('editorial_image_fu'); ?>" class="img-fluid">
            </div>
            <div class="col-md-8 ps-5">
                <h5 class="text-muted">
                <?php echo get_field('editorial_sub_title_fu'); ?>
                </h5>
                <h3> <?php echo get_field('editorial_title_fu'); ?></h3>
                <p class="lead"><?php echo get_field('editorial_content_fu'); ?></p>
                
                <a href="<?php echo get_field('editorial_link_href'); ?>" class="btn btn-purple"><?php echo get_field('editorial_link_text_fu'); ?></a>
            </div>
        </div>
    </div>
  </section>

  <section class="bg-light " >
    <div class="container">
      <div class="row brownbg">
        <div class="col-md-12 text-center px-5">
          <p class="lead"><?php echo get_field('editorial_banner_fu'); ?></p>
          <h3>
          <?php echo get_field('editorial_text_fu'); ?>
          </h3>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-dark-pattern">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center mb-3">
          <h2 class="h1 mb-5"><?php echo get_field('panel_heading_fu'); ?></h2>
        </div>
    </div>
    <div class="row mt-4">
    <?php
     $i=1;
    if (have_rows("panels_fu")):
                            while (have_rows("panels_fu")):
                                the_row(); ?>
        <div class="col-md-4 d-flex">
          <div class="light-card text-center">
            <img src="<?php echo get_sub_field('panel_images_fu'); ?>" width="75" class="mb-4">
            <h3 class="mb-3"><?php echo get_sub_field('panel_heading_fu'); ?></h3>
            <p class="mb-3"><?php echo get_sub_field('panel_description_fu'); ?></p>
          </div>
        </div> 
        <?php if($i % 3 === 0){ echo '</div><div class="row mt-4">';} ?>
        <?php
                   $i++;
                    endwhile;
                endif; ?>
      </div>

      <div class="row mt-4 text-center">
        <div class="col-md-12">
          <a href="<?php echo get_field('panel_link_href'); ?>" class="btn btn-purple"><?php echo get_field('panel_link_text'); ?></a>
        </div>
        
      </div>
    </div>
  </section>
  <section class="bg-light training-tab">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="h1 mb-5"><?php echo get_field('training_title_fu'); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <!-- Nav pills -->
            <ul class="nav nav-pills mb-3" role="tablist">
            <?php
     $i=1;
    if (have_rows("training_course")):
                            while (have_rows("training_course")):
                                the_row(); ?>
              <li class="nav-item">
                <a class="nav-link <?php if($i==1){ echo "active"; } ?>" data-bs-toggle="pill" href="#tab<?php echo $i; ?>"><?php echo get_sub_field('title_fu_course'); ?></a>
              </li>
              <?php
                   $i++;
                    endwhile;
                endif; ?>
            </ul>
        </div>
      </div>

      <div class="tab-content">
      <?php
     $j=1;
    if (have_rows("training_course")):
                            while (have_rows("training_course")):
                                the_row(); ?>
        <div id="tab<?php echo $j; ?>" class="container tab-pane <?php if($j==1){ echo "active"; }else{ echo "fade"; } ?>"><br>
          <div class="row align-items-center">
            <div class="col-md-6 p-4 pt-0">
              <img src="<?php echo get_sub_field('course_image_fu'); ?>" class="img-fluid">
            </div>
            <div class="col-md-6 p-4 lead">
              <h4 class="mb-4 h3"><?php echo get_sub_field('sub_title_fu'); ?></h4>
        
              <?php echo get_sub_field('description_fu_course'); ?>
              <h5 class="mt-4">
                Details
              </h5>
              <ul class="list-unstyled">
                <li class="lead"> <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock-icon.png"> </i> <?php echo get_sub_field('course_hours_fu'); ?></li>
                <li class="lead mt-2"><i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/conf-ico.png"> </i> <?php echo get_sub_field('course_details_fu'); ?></li>
              </ul>
              <a href="<?php echo get_sub_field('course_link_href_fu'); ?>" class="btn btn-purple"><?php echo get_sub_field('course_link_text_fu'); ?></a>
            </div>
          </div>
        </div>
        <?php
                   $j++;
                    endwhile;
                endif; ?>
      </div>

      
    </div>
  </section>

  <section class="bg-dark-pattern">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-3">
          <h2 class="h1 mb-5"><?php echo get_field('title_fu_hacker'); ?></h2>
          <?php echo get_field('description_fu_hacker'); ?>
        </div>
        <div class="col-md-6 mb-3 video-cont">
            <iframe width="560" height="315" src="<?php echo get_field('video_url_fu_hacker'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    <div class="row mt-4">
    <?php
   
    if (have_rows("hacker_panel_fu")):
                            while (have_rows("hacker_panel_fu")):
                                the_row(); ?>
       <div class="col-md-3 d-flex">
          <div class="light-card text-center">
            <img src="<?php echo get_sub_field('image_p_h_u'); ?>" width="75" class="mb-4">
            <h5 class="mb-3"><?php echo get_sub_field('title_p_h_u'); ?></h5>
            <p class="mb-3"><?php echo get_sub_field('description_p_h_u'); ?></p>
          </div>
        </div>

        <?php
             
                    endwhile;
                endif; ?>

      </div>
     
      
    </div>
  </section>

  <section class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="h1"><?php echo get_field('title_fu_slide'); ?></h2>
          <p class="lead mb-5"><?php echo get_field('description_fu_slide'); ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 client-sec">
        <?php   
           if (have_rows("slider_image_fu")):
            while (have_rows("slider_image_fu")):
            the_row();
           ?>
          <img src="<?php echo get_sub_field('image_fu_slider'); ?>" class="">
          <?php             
            endwhile;
            endif; 
          ?>
        </div>
      </div>
    </div>
  </section>

<!--
  <section class="bg-light company-testi pt-0 nomobileview">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="h1"><?php echo get_field('testimonial_heading_fu'); ?></h2>
          <p class="lead"><?php echo get_field('testimonial_description_fu'); ?></p>
        </div>
      </div>
      <div class="row">
      <?php   
           if (have_rows("testimonail_charts_fu")):
            while (have_rows("testimonail_charts_fu")):
            the_row();
           ?>

        <div class="col-md-4">
          <div class="testi">
            
            <img src="<?php echo get_sub_field('testimonial_images_fu'); ?>" class="testi-img">
            <div class="testi-cont bg-purple">
              <p>
                "<?php echo get_sub_field('testimonial_message_fu'); ?>"
              </p>
            </div>
          </div>
        </div>
        <?php             
            endwhile;
            endif; 
          ?>
      </div>
    </div>
  </section> -->
     
  <section class="get-in-touch pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12 p-5">
          <h2 class="h2 mb-3"><?php echo get_field('title_bbfu'); ?></h2>
          <p class="lead"><?php echo get_field('description_bbfu'); ?></p>
          <a href="<?php echo get_field('url_bbfu'); ?>" class="btn btn-pink"><?php echo get_field('link_text_bbfu'); ?></a>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>