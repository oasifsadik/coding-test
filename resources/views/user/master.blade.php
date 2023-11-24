<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab-4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Mar 2020 04:47:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{ asset('admin') }}/img/favicon.html">

    <title>user</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('user') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('user') }}/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('user') }}/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{ asset('user') }}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{ asset('user') }}/css/owl.carousel.css" type="/text/css">

    <!--right slidebar-->
    <link href="{{ asset('user') }}/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{ asset('user') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('user') }}/css/style-responsive.css" rel="stylesheet" />

  </head>

  <body class="light-sidebar-nav">

  <section id="container">
      <!--header start-->
      <header class="header white-bg">
             @include('user.lay.navbar')
        </header>
      <section id="main-content">
          <section class="wrapper">
            @yield('userContent')
          </section>
      </section>
      <!--main content end-->

      <!--footer start-->
      <footer class="site-footer">
          @include('user.lay.footer')
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('user') }}/js/jquery.js"></script>
    <script src="{{ asset('user') }}/js/bootstrap.bundle.min.js"></script>




<!-- Mirrored from thevectorlab.net/flatlab-4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Mar 2020 04:48:08 GMT -->
</html>
