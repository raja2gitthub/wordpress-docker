<?php
/* Template Name: About us */
get_header(); ?>
<style>
  @media only screen and (max-width: 768px){  
    .offset-1{
      margin-left:0px!important;
    }
  }
</style>
<main>

  <section class="home-hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
           
          <h1> <?php echo get_field('banner_text'); ?></h1>
          <p class="lead"><?php echo get_field('banner_sub_title'); ?></hp>
          <p class=""><?php echo get_field('banner_description'); ?></p>
         
        </div>
        <div class="col-md-6">
          <img src="<?php echo get_field('banner_image'); ?>" class="img-fluid">
        </div>
      </div>

    </div>
  </section>

  <section class="pink-section">
    <div>
        <h2><?php echo get_field('title_wk'); ?></h2>
    </div>
  </section>
  <?php
    if (have_rows("editorial_content_wk")):
                            while (have_rows("editorial_content_wk")):
                                the_row(); ?>
<?php if(get_sub_field('theme_wk_editorial')=='white'){ ?>
  <section class="bg-white-pattern">
    <div class="container">
        <div class="row align-items-center d-flex">
            <div class="col-md-8 ps-5">
                
                <h3><?php echo get_sub_field('title_e_wk'); ?></h3>
                <div class="lead w-75"><?php echo get_sub_field('description_e_wk'); ?></div>
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_sub_field('image_editorial_wk'); ?>" class="img-fluid">
            </div>
            
        </div>
    </div>
  </section>

<?php } ?>
<?php if(get_sub_field('theme_wk_editorial')=='dark'){  ?>
  <section class="bg-dark-pattern">
    <div class="container">
        <div class="row align-items-center d-flex">
            
            <div class="col-md-4">
                <img src="<?php echo get_sub_field('image_editorial_wk'); ?>" class="img-fluid">
            </div>

            <div class="col-md-6 offset-1">
                
                <h3><?php echo get_sub_field('title_e_wk'); ?></h3>
                <div class="lead"><?php echo get_sub_field('description_e_wk'); ?></div>
            </div>
            
        </div>
    </div>
  </section>
<?php } ?>

  <?php endwhile; endif;  ?>



  <section class="bg-blue-pattern mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-3">
          <h2 class="h1 mb-5"><?php echo get_field('title_ov'); ?></h2>
        </div>
    </div>
    <div class="row mt-4">

    <?php
    if (have_rows("our_values_content")):
                            while (have_rows("our_values_content")):
                                the_row(); ?>
        <div class="col-md-4 d-flex">
          <div class="light-card text-center">
            <img src="<?php echo get_sub_field('image_ov'); ?>" width="75" class="mb-4">
            <h3 class="mb-3"><?php echo get_sub_field('title_ov'); ?></h3>
            <p class="mb-3"><?php echo get_sub_field('content_ov'); ?></p>
          </div>
        </div>
        <?php endwhile; endif;  ?>

      </div>
     
    </div>
  </section>


 <!-- <section class="bg-light nomobileview">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-4">
          <h2 class="h2"><?php echo get_field('title_partner'); ?>​</h2>
         
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 client-sec">
        <?php
    if (have_rows("partnership_logo")):
                            while (have_rows("partnership_logo")):
                                the_row(); ?>  
          <img src="<?php echo get_sub_field('logo_wk'); ?>" class="">
          <?php endwhile; endif;  ?>
        </div>
      </div>
    </div>
  </section>-->

  <?php get_footer(); ?>