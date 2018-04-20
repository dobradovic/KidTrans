<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kid Trans</title>


    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/masterslider/style/masterslider.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/masterslider/skins/default/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/owl-carousel/owl.carousel.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/css/color-blue.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/css/retina.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet"/>


    <!-- Google Web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>

    <!-- Font icons -->
    <link rel="stylesheet" href="icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css"/><!-- Fontawesome icons css -->
    <!-- Bootstrap -->

<!-- Font icons -->



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      @include('inc.menu')
@yield('content')

@include('inc.footer')


         <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
         <script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
         <script src="js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
         <script src="owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
         <script src="masterslider/masterslider.min.js"></script><!-- Master slider main js -->
         <script src="js/jquery.matchHeight-min.js"></script><!-- for columns with background image -->
         <script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
         <script src="js/include.js"></script><!-- custom js functions -->

         <script>
             /* <![CDATA[ */
             jQuery(document).ready(function ($) {
                 'use strict';

                 function equalHeight() {
                     $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                         var maxHeight = $(this).outerHeight();
                         $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
                     });
                 };

                 $(document).ready(equalHeight);
                 $(window).resize(equalHeight);

                 // MASTER SLIDER START
                 var slider = new MasterSlider();
                 slider.setup('masterslider', {
                     width: 1140, // slider standard width
                     height: 854, // slider standard height
                     space: 0,
                     speed: 50,
                     layout: "fullwidth",
                     centerControls: false,
                     loop: true,
                     autoplay: true
                             // more slider options goes here...
                             // check slider options section in documentation for more options.
                 });
                 // adds Arrows navigation control to the slider.
                 slider.control('arrows');

                 // CLIENTS CAROUSEL START
                 $('#client-carousel').owlCarousel({
                     items: 6,
                     loop: true,
                     margin: 30,
                     responsiveClass: true,
                     mouseDrag: true,
                     dots: false,
                     responsive: {
                         0: {
                             items: 2,
                             nav: true,
                             loop: true,
                             autoplay: true,
                             autoplayTimeout: 3000,
                             autoplayHoverPause: true,
                             responsiveClass: true
                         },
                         600: {
                             items: 3,
                             nav: true,
                             loop: true,
                             autoplay: true,
                             autoplayTimeout: 3000,
                             autoplayHoverPause: true,
                             responsiveClass: true
                         },
                         1000: {
                             items: 6,
                             nav: true,
                             loop: true,
                             autoplay: true,
                             autoplayTimeout: 3000,
                             autoplayHoverPause: true,
                             responsiveClass: true,
                             mouseDrag: true
                         }
                     }
                 });

                 // TESTIMONIAL CAROUSELS START
                 $('#testimonial-carousel').owlCarousel({
                     items: 1,
                     loop: true,
                     margin: 30,
                     responsiveClass: true,
                     mouseDrag: true,
                     dots: false,
                     autoheight: true,
                     responsive: {
                         0: {
                             items: 1,
                             nav: true,
                             loop: true,
                             autoplay: true,
                             autoplayTimeout: 3000,
                             autoplayHoverPause: true,
                             responsiveClass: true,
                             autoHeight: true
                         },
                         600: {
                             items: 1,
                             nav: true,
                             loop: true,
                             autoplay: true,
                             autoplayTimeout: 3000,
                             autoplayHoverPause: true,
                             responsiveClass: true,
                             autoHeight: true
                         },
                         1000: {
                             items: 1,
                             nav: true,
                             loop: true,
                             autoplay: true,
                             autoplayTimeout: 3000,
                             autoplayHoverPause: true,
                             responsiveClass: true,
                             mouseDrag: true,
                             autoHeight: true
                         }
                     }
                 });
             });
             /* ]]> */
         </script>
  </body>
</html>
