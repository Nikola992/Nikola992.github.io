<?php

get_header();
//Uzimanje IDija kategorija koju smo selektovali
$cat_id = get_query_var('cat');

$args = array(
    "numberposts" => -1,//broj postova koji se selektuje 
    "order" => "DESC", // descending sortiranje, najnoviji ide prvi
    "orderby" => "post_date", //sortiranje postova po datumu
    "category" => "$cat_id" //filtriranje postova po kategoriji
            
);

//filtriranje postova
$posts = get_posts($args);




    

?>

<div class="col-lg-8">



                        <section class="blog">
                            
                            

                            <div class="row masonery">
<?php foreach ($posts as $ps){ ?>
                                <!--clanak 1 -->
                                <div class="col-md-6 ">
                                    <article class="clanak-1-2  slideDowm animation " data-animation="slideDown">
                                        <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($ps->ID), 'medium'); ?>
                                       
                                        <figure>
                                            
                                            <a href="<?php echo get_permalink($pt->ID);?>">
                                                <img src="<?php echo $pimage[0]; ?>" alt="<?php echo ''; ?>"/>
                                            </a>
                                        </figure>
                                        <a href="#">
                                        <div class="title " style="background: #f15c5b">
                                            <h3><?php echo $ps->post_title; ?></h3>
                                            <p class="mb-0">branding, ui-ux, article</p>
                                        </div>
                                        </a>
                                        <div class="tekst-1 bg-white box-shadow">
                                            <p >
                                                <?php echo portfolio_get_more_excerpt ($ps->post_content); ?> 
                                            </p>
                                        </div>                                       
                                    </article> 
                                </div>
                                    
                                  <?php }  ?>

                               

                                


                            </div>
                        </section>



                      


                    </div>






<?php


get_footer();





