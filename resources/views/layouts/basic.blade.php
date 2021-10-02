<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Craftant | @yield('page-title')</title>
    <script>
    var BASE_URL = "{{ URL::to('/')}}";
    </script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('lp/assets/vendors/fontawesome-pro-5/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/vendors/slick/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/vendors/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/vendors/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/vendors/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/vendors/mapbox-gl/mapbox-gl.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/themes.css') }}">

    <link rel="icon" href="">
    @include('partials.stylesheets')

  </head>

  <body>
    <!--Header-->
    @include('partials.header')
    <!--/Header-->

    <!--Content-->
    @yield('content')
    <!--Content-->

    <!--Footer-->
    @include('partials.footer')
    <!--/Footer-->

    <!--/modals-->
    @include('partials.scripts')
  </body>

</html>