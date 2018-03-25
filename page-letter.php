
<?php

/* *
 * Template Name: Letter Template
 */


get_header();
?>



 <div class="col-lg-8 right-colum">
                        <section class="expirience  cover-letter box-shadow fade-in">
                            <h5 class="mb-4"><b><?php echo get_field("letter_person", $post->ID); ?></b></h5>
                            <h5 class="mb-4"><b><?php echo  $post->post_date?></b></h5>
                            <p><?php echo get_field("letter_company", $post->ID); ?></p>
                        
                            
                            <p class="letter">
                                <?php echo  $post->post_content; ?>
                            </p>

                            

                            <address>
                               <?php echo get_field("letter_subtitle", $post->ID); ?>
                               
                            </address>

                        </section>

                        <section class="expirience fade-in box-shadow">
                            <div class="row">
                                <div class="col-md-2 px-2 pt-2">
                                    <img src="img/oznaka-2.png" alt=""/>
                                </div>
                                <div class="col-md-10 pl-5">
                                    <article class="">
                                        <h1 class="mb-4">
                                            Refarances
                                        </h1>
                                        <h4>Mr. John Doe</h4>
                                        <a href="#">Founder & CEO, Lorem Ipsum</a>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        </p>
                                    </article>
                                    <article class="btop">
                                        <h4>Mr. Anwar Hosainl</h4>
                                        <a href="#">Founder & CEO, Lorem Ipsum</a>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        </p>
                                    </article>
                                </div>
                            </div>

                        </section>

                    </div>



<?php
get_footer();
?>
