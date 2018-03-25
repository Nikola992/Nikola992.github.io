<?php
get_header();
//Uzimanje IDija kategorija koju smo selektovali
$cat_id = get_query_var('cat');

$args = array(
    "numberposts" => -1, //broj postova koji se selektuje 
    "order" => "DESC", // descending sortiranje, najnoviji ide prvi
    "orderby" => "post_date", //sortiranje postova po datumu
    "category" => "$cat_id" //filtriranje postova po kategoriji
);

//filtriranje postova
$posts = get_posts($args);
?>

<div class="col-lg-8 col-md-7 right-colum">                 
    <div id="right-side-wrapper" >


        
            <div class="portfolio ">
                <div class="row ">
                <?php foreach ($posts as $ps) { ?>
                    <div class="mb-2 col-md-6 slideRight h-100 animation  " data-animation="slideRight">
                        <a href="#">
                            <figure>

                                <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($ps->ID), 'medium_large'); ?>
                                <img src="<?php echo $pimage[0]; ?>" alt="<?php echo ''; ?>"/>
                            </figure>
                            <div class="hover">
                                <div class="hover-content text-center d-flex align-items-center h-100 px-5 text-white">
                                    <div>
                                        <h5 class="h4 text-center"><?php echo $ps->post_title; ?></h5>
                                        <p class="text-center"><?php echo portfolio_get_more_excerpt($ps->post_content); ?> </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php } ?> 

            </div> 


        </div>        
    </div>                     
</div>






<?php
get_footer();


