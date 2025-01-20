<?php
/* Template Name: Contact Us page */

              get_header();
              ?>

        
<section class="contact-hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1>
           <?php echo get_field('banner_text'); ?>
          </h1>
          <p class="lead"> <?php echo get_field('banner_description'); ?></p>
         
        </div>
        <div class="col-md-6">
          <img src="<?php echo get_field('banner_image'); ?>" class="img-fluid">
        </div>
      </div>

    </div>
  </section>

  <section>
    <div class="container contact-card my-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h1">Contact Us Today</h2>
            </div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="0ce360e" title="Contact Form Details"]');  ?>
    </div>
  </section>
   

              <?php
             // get_sidebar();
              get_footer();
            ?>