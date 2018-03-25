<?php
/* *
 * Template Name: Home Template
 */


get_header();
?>

<div class="col-lg-8 right-colum">
    <section class="expirience fade-in box-shadow">
        <div class="row">
            <div class="col-md-2  pl-3 pr-3 mt-1  mb-4 text-center text-md-left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/oznaka-1.png" alt=""/>
            </div>
            <div class="col-md-10  text-left">
                <article class="">
                    <h2 class="mb-4  h1 text-md-left">
                        Work Experiences
                    </h2>

                    <?php
                    $args = array(
                        "numberposts" => -1,
                        "post_type" => "experience"
                    );

                    $experience = get_posts($args);
                    ?>

                    <?php foreach ($experience as $e) { ?>


                        <article class="btop">
                            <h4><?php echo $e->post_title; ?></h4>
                            <a href="#"><?php echo $e->post_date; ?></a>
                            <p>
                                <?php echo $e->post_content; ?> 
                            </p>
                        </article>




                    <?php } ?>
                    </section> 


                    <section class="expirience fade-in box-shadow" >
                        <div class="row">
                            <div class="col-md-2  pl-3 pr-3  mb-4 text-center text-md-left">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/oznaka-2.png" alt=""/>
                            </div>
                            <div class="col-md-10 ">
                                <article class="">
                                    <h2 class="mb-4 text-center h1 text-md-left">
                                        Education
                                    </h2>
                                    <?php
                                    $args = array(
                                        "numberposts" => -1,
                                        "post_type" => "education"
                                    );

                                    $education = get_posts($args);
                                    ?>

                                    <?php foreach ($education as $e) { ?>


                                        <article class="btop">
                                            <h4><?php echo $e->post_title; ?></h4>
                                            <a href="#"><?php echo $e->post_date; ?></a>
                                            <p>
                                                <?php echo $e->post_content; ?> 
                                            </p>
                                        </article>




                                    <?php } ?>
                            </div>

                        </div>
                    </section>


                    <section class="expirience fade-in box-shadow">
                        <div class="row">
                            <div class="col-md-2  pl-3 pr-3  text-center text-md-left">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/oznaka-3.png" alt=""/>
                            </div>
                            <div class="col-md-10  ">
                                <h2 class="mb-4 text-center int h1 text-md-left pr-5">
                                    Interests
                                </h2>

                               

                                <div class=" hobies d-flex justify-content-between ">
                                     <?php
                                
                                
                                // Interests
                                $args = array(
                                    "numberposts" => -1,
                                    "post_type" => "interests"
                                );

                                $interests = get_posts($args);
                                ?>

                                <?php foreach ($interests as $e) { ?>
                                    
                                    <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($e->ID), 'small'); ?>


                                    <figure>
                                        <img  src="<?php echo $pimage[0]; ?>" alt="<?php echo ''; ?>"  >
                                    </figure>
                                     




                                <?php } ?>
                                    
                                </div>
                            </div>

                        </div>
                    </section>
                    <section class="expirience fade-in box-shadow">
                        <div class="row">
                            <div class="col-md-6 px-2 text-center ">
                                <a href="#">www.alrayhan.com</a>
                            </div>
                            <div class="col-md-6 pl-5 text-center">
                                <a href="#">dribbble.com/rtralrayhan</a>
                            </div>
                    </section>

            </div>
        </div>
        </main>   


        <?php
        get_footer();
        ?>
