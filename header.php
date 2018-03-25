

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="author" content="Nikola Dosenovic">
        <meta name="description" content="CV, cover letter">
        <meta name="keywords" content="cover letter, Nikola Dosenovic concact info">
        <title>Nikola Dosenovic</title>

        <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
        <!-- FONTs -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,700,700i,900i" rel="stylesheet">

        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>

    <body  class="backgorund">
        <nav class="menu">
            <ul class="side-menu list-unstyled bg-dark">
                <?php
                $top_menu = wp_get_nav_menu_items('MainMenu');


                foreach ($top_menu as $menu) {
                    ?>
                    <li><a class="mb-3" href="<?php echo $menu->url; ?>"><?php echo $menu->title ?></a></li>

                <?php } ?>





                <!--                <li>
                                    <a href="CV.html" class="mb-3">Naslovna</a>
                                </li>
                                <li>
                                    <a href="portfolio.html" class="mb-3">portfolio</a>
                                </li>
                                <li>
                                    <a href="cover_letter.html" class="mb-3">Letter</a>
                                </li>
                                <li>
                                    <a href="Contact.html" class="mb-3">Contact</a>
                                </li>
                                <li>
                                    <a href="blog.html">blog</a>
                                </li>-->
            </ul>
            <span class="fa fa-close text-white"></span>
        </nav>
        <div class="menu-overlay">

        </div>
        <div class="container ">

            <main>
                <div class="row ">

                    <div class="col-lg-4 profile pr-0" >
                        <aside style="" class="aside">
                            <div class="toggle-menu ">

                                <span></span>
                                <span></span>
                                <span></span>

                            </div>
                            <section class="profile-pic">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/Untitled-1.jpg" alt=""/>
                                    <div>
                                        <h2 class="text-white"><b><?php echo get_field("first_name", 58); ?>  <?php echo get_field("last_name", 58); ?></b></h2>
                                        <h6 class="text-white"><?php echo get_field("position", 58); ?> </h4>
                                    </div>
                                </figure>

                            </section>

                            <section class="text-white mbottom">
                                <div class="row no-gutters">
                                    <div class="col-md-4 text-center">
                                        <span class="fa fa-user-o"></span>
                                    </div>
                                    <div class="col-md-8 h-line px-2">
                                        <?php echo get_field("about_me", 58); ?>
                                    </div>

                                </div>
                            </section>

                            <section class="text-white mbottom">
                                <div class="row no-gutters">
                                    <div class="col-md-4 text-center ">
                                        <span class="fa fa-phone "></span>
                                    </div>
                                    <div class="col-md-8 h-line px-2">
                                        <p ><?php echo get_field("personal_number", 58); ?></p>
                                        <p>Mobile</p>
                                        <p ><?php echo get_field("work_number", 58); ?></p>
                                        <p>Work</p>
                                    </div>

                                </div>
                            </section>

                            <section class="text-white mbottom" >
                                <div class="row no-gutters">
                                    <div class="col-md-4 text-center ">
                                        <span class="fa fa-envelope  "></span>
                                    </div>
                                    <div class="col-md-8 h-line px-2">
                                        <a href="mailto:nikoladosenovic92@gmail.com" target="_top" class="text-white"><?php echo get_field("personal_email", 58); ?></a>
                                        <p class="mt-3">Personal</p>
                                        <a href="mailto:nikoladosenovic92@gmail.com" target="_top" class="text-white"><?php echo get_field("work_email", 58); ?></a>
                                        <p class="mt-3">Work</p>
                                    </div>

                                </div>
                            </section>
                            <section class="text-white mbottom" >
                                <div class="row no-gutters">
                                    <div class="col-md-4 text-center ">
                                        <span class="fa fa-map  "></span>
                                    </div>
                                    <div class="col-md-8 h-line px-2">
                                        <p>
                                            24 Golden Tower (2nd floor) 
                                            Amberkhana, Sylhet<br>
                                            SYL-3RF87W
                                        </p>

                                    </div>

                                </div>
                            </section>

                            <div class="skills text-white">
                                <div class="row no-gutters">
                                    <div class="col-md-4 text-center">
                                        <span class="fa fa-list mt-1"></span>
                                    </div>
                                    <div class="col-md-8 skills-pad pl-2">


                                        <h3 class="mb-3">Professional Skills</h3>


                                        <?php
                                        $args = array(
                                            "numberposts" => -1,
                                            "post_type" => "skills",
                                            
                                        );

                                        $skills = get_posts($args);
                                        ?>

                                        <?php foreach ($skills as $e) { ?>
                                        <h5><?php echo $e->post_title; ?></h5>
                                        <div class="crte" data-skill="<?php echo get_field("skill_percent", $e->ID); ?>">
                                            <div class="bela-crta">
                                                <span class="tacka"></span>
                                            </div>                                  
                                        </div>

                                        <?php } ?>

                                    </div>
                                </div>
                            </div>

                        </aside>
                    </div>

