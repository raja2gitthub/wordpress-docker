<?php
             /* Template Name: Terms and Policy */

                get_header();
                ?>
                 <main class="terms">
                    <div class="container-fluid mt-100">
                        <div class="row mt-100">
                            <div class="col-12 col-md-4  sidebar">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location'=> 'sidebar',
                                ));
                            ?>
                           </div>
                           <div class="col-12 col-md-8  paddingtb">
                                <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                           </div>
</div>

</div>

                <?php

                get_footer();
                ?>