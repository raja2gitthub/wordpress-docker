<?php
/* Template Name: For Individual page */
get_header(); ?>
<main>

  <section class="home-hero for-individual">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h4 class="yellow-text"><?php echo get_field('banner_sub_title'); ?></h4>
          <h1> <?php echo get_field('banner_text'); ?></h1>
          <p class="lead"><?php echo get_field('banner_description'); ?></p>
         
        </div>
        <div class="col-md-6">
          <img src="<?php echo get_field('banner_image'); ?>" class="img-fluid">
        </div>
      </div>

    </div>
  </section>

  <section class="next-to-hero" >
    <div class="container">
      <div class="row align-items-center">
        <div class="col-5">
          <img src="<?php echo get_field('tag_image_fi_t_b'); ?>" class="img-fluid">
        </div>
        <div class="col-7 ps-5">
          <p class="lead text-light"><?php echo get_field('title_fi_t_b'); ?></p>
          <h2 class="yellow-text"><?php echo get_field('tag_line_fi_t_b'); ?></h2>
        </div>
      </div>
    </div>
  </section>

  <section class="what-we-do">
    <div class="container">
        <div class="row align-items-center d-flex">
            <div class="col-md-4 order-1">
                <img src="<?php echo get_field('image_ed_fi'); ?>" class="img-fluid">
            </div>
            <div class="col-md-8 ps-5 order-0">
                
                <h3><?php echo get_field('title_editorial_fi'); ?></h3>
                <?php echo get_field('content_fi'); ?>

                <a href="<?php echo get_field('url_text_ed_fi'); ?>" class="btn btn-purple"><?php echo get_field('link_text_ed_fi'); ?></a>
            </div>
        </div>
    </div>
  </section>

  <section class="mb-5" >
    <div class="container">
      <div class="row box-sec p-5">
        <div class="col-md-12 text-center px-5">
          <img src="<?php echo get_field('editorial_bottom_image_fi'); ?>" class="mb-3">
          <h3>
          <?php echo get_field('editorial_bottom_title_fi'); ?>
          </h3>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-dark-pattern">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center mb-3">
          <h2 class="h1 mb-5"><?php echo get_field('title_p_fi'); ?></h2>
        </div>
    </div>
    <div class="row mt-4">
    <?php
     $i=1;
    if (have_rows("panel_section")):
      $count = count(get_field('panel_section'));
                            while (have_rows("panel_section")):
                                the_row(); 
                                
                                
                                ?>
        <div class="col-md-4 d-flex">
          <div class="light-card text-center">
            <img src="<?php echo get_sub_field('image_s_fi'); ?>" width="75" class="mb-4">
            <h3 class="mb-3"><?php echo get_sub_field('title_s_fi'); ?></h3>
            <p class="mb-3"><?php echo get_sub_field('description_s_fi'); ?></p>
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
          <a href="<?php echo get_field('link_url_p_fi'); ?>" class="btn btn-purple"><?php echo get_field('link_text_p_fi'); ?> </a>
        </div>
        
      </div>
    </div>
  </section>

  <section class="bg-light training-tab">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="h1 mb-5"><?php echo get_field('title_fi_training'); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <!-- Nav pills -->
            <ul class="nav nav-pills row mb-3" role="tablist">
            <?php
     $i=1;
    if (have_rows("training_course")):
                            while (have_rows("training_course")):
                                the_row(); ?>
              <li class="nav-item col-12">
                <a class="nav-link w-100 me-1 <?php if($i==1){ echo "active"; } ?>" data-bs-toggle="pill" href="#tab<?php echo $i; ?>"><?php echo get_sub_field('title_fi_training'); ?></a>
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
              <img src="<?php echo get_sub_field('course_image_fi'); ?>" class="img-fluid">
            </div>
            <div class="col-md-6 p-4 lead">
              <h4 class="mb-4 h3"><?php echo get_sub_field('sub_title_fi_training'); ?></h4>
        
              <?php echo get_sub_field('description_training_fi'); ?>
              <h5 class="mt-4">
                Details
              </h5>
              <ul class="list-unstyled">
                <li class="lead"> <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock-icon.png"> </i> <?php echo get_sub_field('detail_list_1'); ?></li>
                <li class="lead mt-2"><i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/conf-ico.png"> </i> <?php echo get_sub_field('detail_list_2'); ?></li>
                <?php if(get_sub_field('detail_list_3')!==''){ ?> 
                <li class="lead mt-2"><i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/money-icon.png"> </i> <?php echo get_sub_field('detail_list_3'); ?></li>
                <?php } ?>
              </ul>
              <a href="<?php echo get_sub_field('course_link_href_fi'); ?>" class="btn btn-purple"><?php echo get_sub_field('course_link_text_fi'); ?></a>
            </div>
          </div>
        </div>
        <?php
                   $j++;
                    endwhile;
                endif; ?>
      </div>
      </div>

      
    </div>
  </section>


  <section class="bg-light success-story pt-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="h1 mb-3"><?php echo get_field('title_voices_fi'); ?></h2>
          <p class="h3"><?php echo get_field('description_voices_fi'); ?></p>
        </div>
      </div>

      <div class="row text-center">
      <?php
      $m=1;
    if (have_rows("voices_stories")):
                            while (have_rows("voices_stories")):
                                the_row(); ?>
      <div class="col-md-4">
          <a href="javascript:;" class="btn btn-outline-dark" id="testav_<?php echo $m; ?>"><?php echo get_sub_field('name_voice_fi'); ?></a>

          <div class="testi" id="testv_<?php echo $m; ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Play.png" id="img_<?php echo $m; ?>" />
                  <video id="test_<?php echo $m; ?>" width="100%">
                    <source src="<?php  echo get_sub_field('testimonial_video_url'); ?>" type="video/mp4">
                    Your browser does not support HTML5 video.
                  </video>
          </div>
        </div>
        <?php
           $m++;
                endwhile;
                endif; ?>
    </div>


    </div>
  </section>



  <section class="fast-track pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12 p-5">
          <h2 class="h2 mb-3"><?php echo get_field('footer_title_fi'); ?></h2>
          <p class="lead"><?php echo get_field('footer_description_fi'); ?></p>
          <a id="myBtn" class="btn btn-pink"><?php echo get_field('footer_link_text'); ?></a>
        </div>
      </div>
    </div>
  </section>
  <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <?php echo do_shortcode('[contact-form-7 id="51099f1" title="Student Form Brochure"]'); ?>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  <?php get_footer(); ?>