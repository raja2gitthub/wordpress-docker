<?php
/* Template Name: Blog Page */
get_header(); ?>
<main>

  <section class="gradient-hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
           
          <h1>
          <?php echo get_field('title_blog'); ?>
          </h1>

          <ul class="blog-social">
            <li>
                <a href="<?php echo get_field('youtube_link'); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yt.png">
                </a>
            </li>
            <li>
                <a href="<?php echo get_field('instagram_link'); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/li.png">
                </a>
            </li>
            <li>
                <a href="<?php echo get_field('facebook_link'); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.png">
                </a>
            </li>
            <li>
                <a href="<?php echo get_field('linkedin_link'); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ins.png">
                </a>
            </li>
          </ul>
         
          <p class="lead"><?php echo get_field('description_blog'); ?></p>

          <a href="<?php echo get_field('link_url_blog'); ?>" class="btn btn-outline-yellow"><?php echo get_field('link_text_blog'); ?></a>
         
        </div>
        <div class="col-md-6">
          <img src="<?php echo get_field('image_blog'); ?>" class="img-fluid">
        </div>
      </div>

    </div>
  </section>

  <section class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="h1 mb-5">Explore Our Products​</h2>

        </div>
      </div>
      <div class="blog-slide">
      <?php
            $args = array(
                'post_type'=>'product',
                'posts_per_page' => -1,
            );
            
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
           ?>
        <div class="blogcard">
            <div class="blog-img">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
            </div>
            <div class="blog-text">
                <p class="mb-3"><?php the_title(); ?></p>
                <a href="<?php echo get_permalink(); ?>" class="btn btn-outline-yellow">Read more</a>
            </div>
        </div>
        <?php     endwhile;
            }
  ?>	

       
      </div>
    </div>
  </section>



  <section class="bg-dark-pattern mb-5">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-7">
                <h2 class="h1"><?php  echo get_field('resource_title_blog'); ?></h2>
                <p class="lead"><?php  echo get_field('resource_description_blog'); ?></p>
            </div>
        </div>
        <div class="row blog-content">
            <?php
            $args = array(
                'post_type'=>'post',
                'posts_per_page' => -1,
            );
            
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
           ?>
            <div class="col-md-4">
                <div class="card card-body">
                    <div class="blog-img" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>');  background-repeat: no-repeat;
  background-size: cover; height:200px;width:100%;">
              
                    </div>
                    <h6 class="">Article, Blog</h6>
                    <h3><a href="<?php echo get_permalink(); ?>" style="color:#fff;"><?php the_title(); ?></a></h3>
                    <p class="lead"><?php echo get_the_excerpt(); ?></p>

                </div>
            </div>
            <?php     endwhile;
            }
  ?>	
           
        </div>
    </div>
  </section>
  <?php get_footer(); ?>