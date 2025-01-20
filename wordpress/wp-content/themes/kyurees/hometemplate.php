<?php
/* Template Name: Home page */

              get_header();
              ?>

        
<main>
<style>
.showDesktop{
  display: table;
}
.showMobile{
  display:none;
}
@media only screen and (max-width: 768px){  
  .showDesktop{
    display:none;
  }
  .showMobile{
    display: table;
  } 
}
</style>
<section class="home-hero">
  <div class="container-fluid">
    <div class="row align-items-center">
  
    <div class="col-12">
<div class="videowrapper showDesktop">
  <video id="myVideo" class="videobanner" width="100%"  autoplay muted loop playsinline>
  <source src="<?php echo get_field('banner_video_url'); ?>" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

</div>
<div class="videowrapper showMobile">
	
	  <video id="myVideo" class="videobanner" width="100%"  autoplay muted loop playsinline>
  <source src="<?php echo get_field('mobile_banner_video'); ?>" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
</div>

</div>
</div>

     <?php $arr =array("purple-card", "blue-card", "pink-card"); ?>
  <div class="container">
  <div class="row align-items-center" style="margin:30px 0px">
  <div class="col-12 text-center">
        <h1 style="text-align:center">
        <?php echo get_field('banner_text_home'); ?>
        </h1>
        <p class="lead" style="text-align:center"><?php echo get_field('banner_content_homepage'); ?></p>
        <a class="btn btn-yellow" href="<?php echo get_field('url_link_hp'); ?>"><?php echo get_field('link_text_hp'); ?></a>
      </div>
    </div> 
     <div class="row mt-4">
      <?php
        $i=0;
      ?>
        <?php if (have_rows("products_hp")):
                            while (have_rows("products_hp")):
                                the_row(); ?>
      <div class="col-md-4 d-flex">
        <div class="<?php echo $arr[$i]; ?>">
          <img src="<?php echo get_sub_field('product_image_hp'); ?>" width="75" class="mb-4">
          <h3 class="mb-3"><?php echo get_sub_field('product_title_hp'); ?></h3>
          <p class="mb-3"><?php echo get_sub_field('product_description_hp'); ?></p>
          <a href="<?php echo get_sub_field('product_link_url_hp'); ?>" class="btn-outline-yellow"><?php echo get_sub_field('product_link_text_hp'); ?></a>
        </div>
      </div>
      <?php
      $i++;
                    endwhile;
                endif; ?>
    </div>
  </div>

</section>

<section class="bg-light Cyber-section" >
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="h1 mb-5"><?php echo get_field('heading_editorial_hp'); ?><span class="yellow-text"> <?php echo get_field('sub_heading_editorial_hp'); ?> </span></h2>
      </div>
    </div>
    <div class="row text-center pie-chart-sec">
    <?php
        $j=1;
      ?>
        <?php if (have_rows("client_editorial")):
                            while (have_rows("client_editorial")):
                                the_row(); ?>
      <div class="col-md-4 <?php if($j<3) {?>border-right <?php } ?>">
        <img src="<?php echo get_sub_field('client_product_image'); ?>" width="" class="w-75">
       <p class="lead mt-3"> <?php echo get_sub_field('client_description_hp'); ?></p>
      </div>
      <?php
      $j++;
                    endwhile;
                endif; ?>
    </div>
  </div>
</section>

<section class="bg-dark-pattern1">
  <div class="container">
    <div class="row">
      <div class="col-md-7 text-left mb-3">
        <h2 class="h1 mb-5"><?php echo get_field('heading_editoral_2'); ?></h2>
      <?php echo get_field('editorial_description_2'); ?>
      </div>
     <!-- <div class="col-md-5">
        <img src="<?php echo get_field('editorial_image_2'); ?>" width="" class="img-fluid">
      </div> -->
    </div>
  </div>
</section>

<section class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="h1 mb-5"><?php echo get_field('title_gp'); ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 client-sec">
      <?php if (have_rows("logos_gp")):
                            while (have_rows("logos_gp")):
                                the_row(); ?>
        <img src="<?php echo get_sub_field('images'); ?>" class="">
        <?php
                    endwhile;
                endif; ?>
      </div>
    </div>
  </div>
</section>
<section class="bg-dark-pattern">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-2">
          <h2 class="h1 mb-5">Events and <span class="yellow-text"> News</span>?</h2>
        </div>
      </div>
      <div class="row bg-light-news">
        <div class="col-md-6 d-flex">
          <div class="card overflow-hidden">
          <?php
            $args = array(
                'post_type'=>'post',
                'posts_per_page' => 3,
                'offset'=>1,
            );
            
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
           ?>
            <div class="news-container">
              <div class="me-3">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
              </div>
              <div>
                <p class="lead mb-1"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
                <ul class="news-list">
                  <li class="ps-0">
                    <span class="text-green"> <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></span>
                  </li>
                  </ul>
              </div>
            </div>

            <?php     endwhile;
            }
  ?>	
          </div>

        </div>
        <div class="col-md-6 d-flex">
        <?php
            $args = array(
                'post_type'=>'post',
                'posts_per_page' => 1,
            );
            
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
           ?>
          <div class="news-container-right card">
            <div style="background:url('<?php echo get_the_post_thumbnail_url(); ?>');  background-repeat: no-repeat;
  background-size: cover; height:460px;width:100%;">

            </div>
            <div class="p-4">
              <h5><a href="<?php echo get_permalink(); ?>" class="colorblack"><?php the_title(); ?></a></h5>
              <ul class="news-list">
                <li class="ps-0">
                  <span class="text-green"> <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></span>
                </li>
     
              </ul>
            </div>
          </div>
          <?php     endwhile;
            }
  ?>	
        </div>


      </div>
      <div class="row">
        <div class="col-md-12 text-center mb-2">
         <a href="<?php echo get_permalink('390'); ?>" class="btn btn-yellow mt-3">Read more</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="h1">Testimonials</h2>
          <p class="lead">"Join Our Cybersecurity Community and Share Your Success Story Today."</p>
        </div>
      </div>
      <?php $color =  array('bg-purple','bg-pink','bg-yellow'); 
         $m=1;
        ?>
      <div class="row">
      <?php
       wp_reset_query();
       $args = [
        "post_type" => "testimonials",
        "posts_per_page" => 3,
    ];

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
      ?>
    
        <div class="col-md-4">
          <div class="testi" id="testv_<?php echo $m; ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-icon.png" id="img_<?php echo $m; ?>" />
                  <video id="test_<?php echo $m; ?>" width="100%" playsinline>
                    <source src="<?php  echo get_field('video_url_testi'); ?>" type="video/mp4">
                    Your browser does not support HTML5 video.
                  </video>
          </div>
        </div>
        <?php
        $m++;
         }
        }
        wp_reset_query();
        ?>
      </div>
    </div>
  </section>
  <section class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="h1">Step Into a Brighter Future</h2>
          <p class="lead w-50 mx-auto">Unlock career-changing cybersecurity training solutions and open up new possibilities for your organization's success.</p>
        </div>
      </div>
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

              <?php
             // get_sidebar();
              get_footer();
            ?>