<?php
/* Template Name: About Page */

                get_header();
                ?>
                 <main class="terms">
                 <div class="wrapper">
                 <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>
   <img src="<?php echo $url; ?>" class="img-responsive" />
</div>
                      <div class="container mt-100">
                        <div class="row mt-100" style="padding-top:30px">
                            <div class="col">
                                
                        <?php the_content(); ?>
</div>
</div>

</div>

                <?php

                get_footer();
                ?>