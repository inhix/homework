<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Inner Page - Techie Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="public/storage/images/front/favicon.png" rel="icon">
    <link href="public/storage/images/front/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="public/front/vendor/aos/aos.css" rel="stylesheet">
    <link href="public/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/front/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/front/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/front/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="public/front/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="public/front/css/style.css" rel="stylesheet">
    <link href="public/front/css/table.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Techie - v4.2.0
    * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="/">Team Spirit</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link" href="#home">Команда</a></li>
                <li class="dropdown nav-link"><a href="#news">Новости</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-left"
                                                                                        disabled="disabled"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="#matches">Матчи</a></li>
                <li><a class="nav-link" href="#players">Игроки</a></li>
                <li><a class="nav-link" href="#shop">Магазин</a></li>
                @if (\Illuminate\Support\Facades\Auth::check())
                    <li><a class="nav-link" href="/logout">Выйти</a></li>
                @else
                    <li><a class="nav-link" href="/login">Войти</a></li>
                @endif

                @if(Illuminate\Support\Facades\Auth::user() === NULL)
                @elseif (Illuminate\Support\Facades\Auth::user()->role_id === 1 or Illuminate\Support\Facades\Auth::user()->role_id === 2)
                    <li><a class="nav-link" href="/admin">Управление</a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">
