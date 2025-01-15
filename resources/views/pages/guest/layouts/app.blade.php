<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Logis Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assetsGuest/img/favicon.png" rel="icon">
    <link href="assetsGuest/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assetsGuest/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetsGuest/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assetsGuest/vendor/aos/aos.css" rel="stylesheet">
    <link href="assetsGuest/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assetsGuest/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assetsGuest/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assetsGuest/css/main.css" rel="stylesheet">

    <style>
        .card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            transition: transform 0.2s;
            margin-bottom: 20px;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .status-image {
            width: 90px;
            height: 90px;
            object-fit: cover;
        }
    </style>

    <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
    @include('pages.guest.layouts.header')

    @yield('content')

    @include('pages.guest.layouts.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assetsGuest/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetsGuest/vendor/php-email-form/validate.js"></script>
    <script src="assetsGuest/vendor/aos/aos.js"></script>
    <script src="assetsGuest/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assetsGuest/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assetsGuest/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assetsGuest/js/main.js"></script>

</body>

</html>
