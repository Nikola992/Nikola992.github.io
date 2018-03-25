<?php
/* *
 * Template Name: Contact Template
 */

get_header();
 if(isset($_POST)&& !empty($_POST)){
     $name =  $_POST['w_name'];
   
     $email = $_POST['w_email'];
   
     $message  = $_POST['w_message'];
     
     
     
     $emailbody = "Ovo su podaci: $name, $email, $message";
     
    //$result = mail("#", "Poruka sa sajta", $emailbody);
 }



?>


<div class="col-lg-8 right-colum">
    <section class="fade-in">
        <div id="map_wrapper" class="box-shadow ">
            <div id="map"></div>
        </div>




        <script>

            // This example displays a marker at the center of Australia.
            // When the user clicks the marker, an info window opens.

            function initMap() {
                var uluru1 = {lat: 44.753188, lng: 20.576324};

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: uluru1,

                });

                var contentString1 = '<div id="content" class="text-center">' +
                        '<img  class="img-fluid" style="max-width:260px" src="img/lik.jpg"></img>' +
                        '<div id="bodyContent">' +
                        '<h2 style="margin-top:10px">Nikola Dosenovic</h2>' +
                        '<p>Zelengorska, 11130 Beograd</p>' +
                        '<p>Tel:060/153/2343</p>' +
                        '</div>' +
                        '</div>';



                var infowindow1 = new google.maps.InfoWindow({
                    content: contentString1
                });


                var marker1 = new google.maps.Marker({
                    position: uluru1,
                    map: map,
                    title: 'Nikola Dosenovic',
                    animation: google.maps.Animation.DROP
                });
                marker1.addListener('click', function () {
                    infowindow1.open(map, marker1);
                });

                marker1.addListener('click', toggleBounce);




            }
            function toggleBounce() {
                if (marker1.getAnimation() !== null) {
                    marker1.setAnimation(null);
                } else {
                    marker1.setAnimation(google.maps.Animation.BOUNCE);
                }
            }



        </script>



        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAS1TxYerdafNWN84lTG1wkMkOdud6qr7E&callback=initMap&scrollwheel=false">
        </script>
    </section>
    <section class="expirience box-shadow  mt-5  fade-in">
        <div class="row">
            <span class="fa fa-paper-plane-o col-md-2 pt-2 "></span>
            <article class="col-md-10">
                <h2 class="mb-4 text-center h1 text-md-left">
                    Contact
                </h2>
                <form class="contact-form" role="form" method="post" action="">
                    <?php
                    if(isset($result)){
                        if($result == TRUE){
                            echo "Poruka je uspeno poslata";
                        }  
                        else{
                            echo 'Poruka NIJE POSLATA';
                        }
                    }
                        
                    
                    ?>
                    <div class="form-group">
                        <label>Name *</label>
                        <input class="form-control box-shadow" type="text" name="w_name" placeholder=""   value="" >
                        <div class="error"></div>
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input class="form-control box-shadow" type="email" name="w_email" placeholder=" "   value="" >
                        <div class="error"></div>
                    </div>
                    <div class="form-group ">
                        <label>Message *</label>

                        <textarea class="form-control mb-0 box-shadow border-right-0 border-top-0 border-left-0"  name="w_message" placeholder=""   ></textarea>
                        <div class="error"></div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">SUBMIT</button>
                    </div>
                </form>
            </article>
        </div>
    </section>


</div>







<?php
get_footer();

