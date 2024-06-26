<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Researcher</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
</head>
<body>

<div class="top-bar-wrapper">
    <div class="container top-bar-child">
        <p class="m-0 py-1">
            <a href="#">info@jobresearch.com</a>
        </p>

        <div class="m-0 py-1 top-bar-socials">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#" class="mr-2">Youtube</a>
        </div>
    </div>
</div>

<?php require base_path('views/frontend/layouts/nav.view.php') ?>


<!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <img src="/public/assets/slider/slider1.jpg" class="w-100" />
        </div>

        <div class="swiper-slide">
            <img src="/public/assets/slider/slider2.jpg" class="w-100" />
        </div>

        <div class="swiper-slide">
            <img src="/public/assets/slider/slider3.jpg" class="w-100" />
        </div>

        <div class="swiper-slide">
            <img src="/public/assets/slider/slider4.jpg" class="w-100" />
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
