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

    <title>Admin | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('admin') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('admin') }}/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="{{ asset('admin') }}/text/css">

    <!--right slidebar-->
    <link href="{{ asset('admin') }}/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{ asset('admin') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/css/style-responsive.css" rel="stylesheet" />

  </head>

  <body class="light-sidebar-nav">

  <section id="container">
      <!--header start-->
      <header class="header white-bg">
             @include('admin.layout.navbar')
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              @include('admin.layout.sidebar')
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            @yield('adminContent')
          </section>
      </section>
      <!--main content end-->

      <!--footer start-->
      <footer class="site-footer">
          @include('admin.layout.footer')
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('admin') }}/js/jquery.js"></script>
    <script src="{{ asset('admin') }}/js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="{{ asset('admin') }}/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{ asset('admin') }}/js/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('admin') }}/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="{{ asset('admin') }}/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="{{ asset('admin') }}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="{{ asset('admin') }}/js/owl.carousel.js" ></script>
    <script src="{{ asset('admin') }}/js/jquery.customSelect.min.js" ></script>
    <script src="{{ asset('admin') }}/js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="{{ asset('admin') }}/js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="{{ asset('admin') }}/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="{{ asset('admin') }}/js/sparkline-chart.js"></script>
    <script src="{{ asset('admin') }}/js/easy-pie-chart.js"></script>
    <script src="{{ asset('admin') }}/js/count.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script>

  </body>

<!-- Mirrored from thevectorlab.net/flatlab-4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Mar 2020 04:48:08 GMT -->
</html>
