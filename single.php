<?php

get_header();


?>


<div class="col-lg-8 right-colum">
                    <section class="single box-shadow mb-4 fade-in">
                        <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($ps->ID), 'large'); ?>
                        <img src="<?php echo $pimage[0]; ?>" alt=""/>
                        <div class="headlines">
                            <h2 class="h1 text-white"><?php echo $post->post_title; ?></h2>
                            <h3 class="text-white">branding, ui-ux, article,

                            </h3>

                        </div>
                        <!-- Go to www.addthis.com/dashboard to customize your tools --> 
                        <div class="addthis_inline_share_toolbox text-center p-2 "></div>
                         
                        <p class=" p-4 ">
                            <?php echo $post->post_content; ?>
                           
                        </p>
                    </section>
    
    
    
    <?php
    
    if(comments_open() || get_comments_number() ):
        comments_template();
    
    endif;
    
    ?>
   








<?php


get_footer();

