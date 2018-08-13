@extends('layouts.app')

@section('content')

  <!-- .page-title start -->
  <div class="page-title-style01 page-title-negative-top pt-bkg08">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1>@lang('kontakt.naslov')</h1>

              </div><!-- .col-md-12 end -->
          </div><!-- .row end -->
      </div><!-- .container end -->
  </div><!-- .page-title-style01.page-title-negative-top end -->

  <div class="page-content">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="custom-heading">
                      <h3>@lang('kontakt.poruka')</h3>
                  </div><!-- .custom-heading.left end -->



                  <br />

                {!! Form::open(['route' => 'message.create'], ['class' => 'wpcf7 clearfix']) !!}


                    @lang('kontakt.ime')
                    {{Form::text('ime', '', ['class' => 'wpcf7-text', 'placeholder' => '']) }}
                    @lang('kontakt.prezime')
                    {{Form::text('prezime', '', ['class' => 'wpcf7-text', 'placeholder' => '']) }}
                    @lang('kontakt.email')
                    {{Form::text('email', '', ['class' => 'wpcf7-text', 'placeholder' => '']) }}
                    @lang('kontakt.poruka')
                    {{Form::textarea('poruka', '', ['class' => 'wpcf7-text', 'placeholder' => ''] )}}
                    {{Form::submit(Lang::get('kontakt.posalji'), array('class' => 'wpcf7-submit')) }}


                {!! Form::close() !!}

                @if(count($errors) > 0)
                  @foreach($errors->all() as $error)
                      <div class="required">
                        {{$error}}
                      </div>
                  @endforeach
                @endif

                @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif




                  <!-- .contact form start -->

              </div><!-- .col-md-6 end -->

              <div class="col-md-6">
                  <div class="custom-heading">
                      <h3>@lang('kontakt.lokacija')</h3>
                  </div><!-- .custom-heading end -->

                  <div id="map"></div>

                  <div class="custom-heading">
                      <h4>@lang('kontakt.info')</h4>
                  </div><!-- .custom-heading end -->

                  <address>
                    @lang('kontakt.adresa')
                  </address>

                  <span class="text-big colored">
                      +00 41 258 489 6587
                  </span>
                  <br />

                  <a href="mailto:">office@kidtrans.com</a>
              </div><!-- .col-md-6 end -->
          </div><!-- .row end -->
      </div><!-- .container end -->
  </div><!-- .page-content end -->



  <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
  <script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
  <script src="js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> <!-- google maps -->
  <script src="js/jquery.ui.map.full.min.js"></script><!-- google maps -->
  <script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
  <script src="js/include.js"></script><!-- custom js functions -->

  <script>
      /* <![CDATA[ */
      jQuery(document).ready(function ($) {
          'use strict';
          // GOOGLE MAPS START
          window.marker = null;

          function initialize() {
              var map;

              var nottingham = new google.maps.LatLng(52.934658, -1.131450);

              var style = [
                  {"featureType": "road",
                      "elementType":
                              "labels.icon",
                      "stylers": [
                          {"saturation": 1},
                          {"gamma": 1},
                          {"visibility": "on"},
                          {"hue": "#e6ff00"}
                      ]
                  },
                  {"elementType": "geometry", "stylers": [
                          {"saturation": -85}
                      ]
                  }
              ];

              var mapOptions = {
                  // SET THE CENTER
                  center: nottingham,
                  // SET THE MAP STYLE & ZOOM LEVEL
                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                  zoom: 9,
                  // SET THE BACKGROUND COLOUR
                  backgroundColor: "#eeeeee",
                  // REMOVE ALL THE CONTROLS EXCEPT ZOOM
                  panControl: true,
                  zoomControl: true,
                  mapTypeControl: true,
                  scaleControl: true,
                  streetViewControl: true,
                  overviewMapControl: true,
                  scrollwheel: false,
                  zoomControlOptions: {
                      style: google.maps.ZoomControlStyle.SMALL
                  }

              };
              map = new google.maps.Map(document.getElementById('map'), mapOptions);

              // SET THE MAP TYPE
              var mapType = new google.maps.StyledMapType(style, {name: "Grayscale"});
              map.mapTypes.set('grey', mapType);
              map.setMapTypeId('grey');

              //CREATE A CUSTOM PIN ICON
              var marker_image = 'img/pin.png';
              var pinIcon = new google.maps.MarkerImage(marker_image, null, null, null, new google.maps.Size(21, 34));

              marker = new google.maps.Marker({
                  position: nottingham,
                  map: map,
                  icon: pinIcon,
                  title: 'Trucking Headquarters, Nothingham'
              });
          }

          google.maps.event.addDomListener(window, 'load', initialize);

          // CONTACT FORM AJAX SUBMIT START
          $('.wpcf7 .wpcf7-submit').on('click', function (event) {
              event.preventDefault();
              var inquiry = $('#contact-inquiry option:selected').text();
              var name = $('#contact-name').val();
              var lastname = $('#contact-last-name').val();
              var email = $('#contact-email').val();
              var contact_message = $('#contact-message').val();
              var form_data = new Array({'inquiry': inquiry, 'name': name, 'last_name': lastname, 'email': email, 'message': contact_message});
              $.ajax({
                  type: 'POST',
                  url: "contact.php",
                  data: ({'action': 'contact', 'form_data': form_data})
              }).done(function (data) {
                  alert(data);
              });
          }); // CONTACT FORM AJAX SUBMIT END

      });
      /* ]]> */
  </script>

@endsection
