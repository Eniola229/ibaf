<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Intentional Breed Africare Foundation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Intentional Breed Africare Foundation (IBAF), established in April 2010, is a youth-focused non-profit. Initially funding exam fees, IBAF now empowers African youth through quality education and global exposure. It's a dynamic force fostering academic, social, and economic growth for a thriving future.">
    <meta name="keywords" content="Breed Africa, Africa Foundation, NGO, charity, community empowerment, education, sustainable development">
    <meta name="author" content="International BreedAfricare Foundation">

    <!-- Open Graph for Social Media -->
    <meta property="og:title" content="Intentional BreedAfricare Foundation">
    <meta property="og:description" content="Join us in building a better future for Africa through education, community empowerment, and sustainable development.">
    <meta property="og:image" content="https://res.cloudinary.com/dldkoa0wg/image/upload/v1755218582/Collage_Grid_Photos_20240207_093910_0016-removebg-preview_wxnikk.png">
    <meta property="og:url" content="https://yourwebsite.com">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        </head>
  <body>
    
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand site-logo" href="{{ url('/') }}">
            <img src="https://res.cloudinary.com/dldkoa0wg/image/upload/v1755218582/Collage_Grid_Photos_20240207_093910_0016-removebg-preview_wxnikk.png" 
                 alt="Site Logo"
                 style="height:60px; max-height:12vw; width:auto; object-fit:contain; display:inline-block; vertical-align:middle;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                    <a href="{{ url('/about') }}" class="nav-link">About</a>
                </li>
                <li class="nav-item {{ request()->is('services') ? 'active' : '' }}">
                    <a href="{{ url('/services') }}" class="nav-link">Services</a>
                </li>
                <li class="nav-item {{ request()->is('donate') ? 'active' : '' }}">
                    <a href="{{ url('/donate') }}" class="nav-link">Donate</a>
                </li>
                <li class="nav-item {{ request()->is('blog') ? 'active' : '' }}">
                    <a href="{{ url('/blog') }}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item {{ request()->is('gallery') ? 'active' : '' }}">
                    <a href="{{ url('/gallery') }}" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item {{ request()->is('events') ? 'active' : '' }}">
                    <a href="{{ url('/events') }}" class="nav-link">Events</a>
                </li>
                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                    <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
