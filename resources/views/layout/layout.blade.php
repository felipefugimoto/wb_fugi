<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title_principal')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/principal/assets/img/favicon.png" rel="icon">
    <link href="/principal/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/principal/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/principal/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/principal/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/principal/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/principal/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/principal/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: SoftLand
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('layout.admin.navbar')
    @yield('conteudo_principal')
    @include('layout.admin.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/principal/assets/vendor/aos/aos.js"></script>
    <script src="/principal/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/principal/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/principal/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/principal/assets/js/main.js"></script>

</body>

</html>
