<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prime | Conference & Event HTML Template</title>

    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('stylesheet_directory'); ?>\assets\css\bootstrap.min.css">

    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('stylesheet_directory'); ?>\assets\fonts\font-awesome.min.css">

    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('stylesheet_directory'); ?>\assets\fonts\simple-line-icons.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>\assets\css\slicknav.css">

    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('stylesheet_directory'); ?>\assets\css\color-switcher.css">

    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('stylesheet_directory'); ?>\assets\css\nivo-lightbox.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>\assets\css\animate.css">

    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('stylesheet_directory'); ?>\assets\css\owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>\assets\css\main.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>\assets\css\style1.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>\assets\css\responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>\assets\css\colors\red.css"
        media="screen">

    <?php wp_head() ?>
</head>

<body>

    <header id="header-wrap">

        <?php include( get_template_directory() . '/includes/nav.php' ); ?>


        <div id="main-slide" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100"
                        src="<?php bloginfo('stylesheet_directory'); ?>\assets\img\slider\slide1.jpg" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <h1 class="wow fadeInDown heading" data-wow-delay=".4s">Prime - Global Web Conference</h1>
                        <p class="fadeInUp wow" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Provident eum ullam <br> cupiditate nam rerum numquam blanditiis doloribus aspernatur.
                        </p>
                        <a href="#" class="fadeInLeft wow btn btn-common" data-wow-delay=".6s">Get Ticket</a>
                        <a href="#" class="fadeInRight wow btn btn-border" data-wow-delay=".6s">Contact</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="<?php bloginfo('stylesheet_directory'); ?>\assets\img\slider\slide2.jpg"
                        alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <h1 class="wow bounceIn heading" data-wow-delay=".7s">22 Amazing Speakers</h1>
                        <p class="fadeInUp wow" data-wow-delay=".9s">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Provident eum ullam <br> cupiditate nam rerum numquam blanditiis doloribus aspernatur.
                        </p>
                        <a href="#" class="fadeInUp wow btn btn-border" data-wow-delay=".8s">Learn More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="<?php bloginfo('stylesheet_directory'); ?>\assets\img\slider\slide3.jpg" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <h1 class="wow fadeInUp heading" data-wow-delay=".6s">Book Your Seat Now!</h1>
                        <p class="fadeInUp wow" data-wow-delay=".8s">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Provident eum ullam <br> cupiditate nam rerum numquam blanditiis doloribus aspernatur.
                        </p>
                        <a href="#" class="fadeInUp wow btn btn-common" data-wow-delay=".8s">Explore</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
                <span class="carousel-control" aria-hidden="true"><i class="icon-arrow-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
                <span class="carousel-control" aria-hidden="true"><i class="icon-arrow-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>