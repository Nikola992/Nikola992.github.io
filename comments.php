<div id="comments">
    <?php
    //Lista komentara
    wp_list_comments(array(
        'avatar_size'=>100,
        'style'=>'ol',
        'short_ping'=>true,
        'reply_text'=>'Odgovori'
    ));
    
    ?>
    
    
     <section class="expirience box-shadow fade-in">
                        <div class="row">
                            
                            <article class="col-md-10">
                                <h2 class="mb-4 text-center h1 text-md-left">
                                    Comment's
                                </h2>
                                <form class="contact-form" role="form" method="get" action="">
                                    <div class="form-group">
                                       
<?php
    //Forma za ostavljanje kometnara
    comment_form();
      
    ?>
                                    </div>
                                </form>
                            </article>
                        </div>
     </section>
</div>