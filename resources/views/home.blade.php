@extends('layouts.app')

@section('content')

  <!-- Stylesheets -->




         <div id="masterslider" class="master-slider ms-skin-default mb-0">
             <!-- first slide -->
             <div class="ms-slide">
                 <!-- slide background -->
                 <img src="masterslider/blank.gif" data-src="img/slider/kidtrans.jpg" alt="Strongest distribution network"/>

                 <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slider-line.jpg" alt=""
                      style="left: 0; top: 310px;"
                      data-type="image"
                      data-effect="left(short)"
                      data-duration="300"
                      data-hide-effect="fade"
                      data-delay="0"
                      />

                 <h2 class="ms-layer pi-caption01"
                     style="left: 0; top: 340px;"
                     data-type="text"
                     data-effect="left(short)"
                     data-duration="300"
                     data-hide-effect="fade"
                     data-delay="300"
                     >
                    Vaš parnter
                 </h2>

                 <h2 class="ms-layer pi-caption01"
                     style="left: 0; top: 400px;"
                     data-type="text"
                     data-effect="left(short)"
                     data-duration="300"
                     data-hide-effect="fade"
                     data-delay="600"
                     >
                     U volumenskom
                 </h2>

                 <h2 class="ms-layer pi-caption01"
                     style="left: 0; top: 460px;"
                     data-type="text"
                     data-effect="left(short)"
                     data-duration="300"
                     data-hide-effect="fade"
                     data-delay="900"
                     >
                     Prevozu
                 </h2>
             </div><!-- .ms-slide end -->

             <!-- slide 02 start -->
             <div class="ms-slide">
                 <!-- slide background -->
                 <img src="masterslider/blank.gif" data-src="img/slider/air1.jpg" alt="International Air freight"/>

                 <h2 class="ms-layer pi-caption01"
                     style="left: 58px; top: 390px;"
                     data-type="text"
                     data-effect="top(short)"
                     data-duration="300"
                     data-hide-effect="fade"
                     data-delay="0"
                     >
                     International Air Freight
                 </h2>

                 <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slider-line.jpg" alt=""
                      style="left: 540px; top: 450px;"
                      data-type="image"
                      data-effect="bottom(short)"
                      data-duration="300"
                      data-hide-effect="fade"
                      data-delay="300"
                      />

                 <p class="ms-layer pi-text"
                    style="left: 375px; top: 470px;"
                    data-type="text"
                    data-effect="top(short)"
                    data-duration="300"
                    data-hide-effect="fade"
                    data-delay="600"
                    >
                     Fast International Air Delivery
                 </p>
             </div><!-- .ms-slide end -->

             <!-- slide 03 start -->
             <div class="ms-slide">
                 <!-- slide background -->
                 <img src="masterslider/blank.gif" data-src="img/slider/kidtrans3.jpg" alt="Worldwide freight services"/>

                 <h2 class="ms-layer pi-caption01"
                     style="left: 258px; top: 390px;"
                     data-type="text"
                     data-effect="top(short)"
                     data-duration="300"
                     data-hide-effect="fade"
                     data-delay="0"
                     >
                     Freight services
                 </h2>

                 <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slider-line.jpg" alt=""
                      style="left: 540px; top: 450px;"
                      data-type="image"
                      data-effect="bottom(short)"
                      data-duration="300"
                      data-hide-effect="fade"
                      data-delay="300"
                      />

                 <p class="ms-layer pi-text"
                    style="left: 278px; top: 470px;"
                    data-type="text"
                    data-effect="top(short)"
                    data-duration="300"
                    data-hide-effect="fade"
                    data-delay="600"
                    >
                     Road, air, train or overseas. We got it covered!
                 </p>
             </div><!-- .ms-slide slide03 end -->

             <!-- slide 04 start -->
             <div class="ms-slide">
                 <!-- slide background -->
                 <img src="masterslider/blank.gif" data-src="img/slider/kd5.jpg" alt="Worldwide freight services"/>

                 <h2 class="ms-layer pi-caption01"
                     style="left: 388px; top: 390px;"
                     data-type="text"
                     data-effect="top(short)"
                     data-duration="300"
                     data-hide-effect="fade"
                     data-delay="00"
                     >
                     Trucking
                 </h2>

                 <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slider-line.jpg" alt=""
                      style="left: 540px; top: 450px;"
                      data-type="image"
                      data-effect="bottom(short)"
                      data-duration="300"
                      data-hide-effect="fade"
                      data-delay="300"
                      />

                 <p class="ms-layer pi-text"
                    style="left: 265px; top: 470px;"
                    data-type="text"
                    data-effect="top(short)"
                    data-duration="300"
                    data-hide-effect="fade"
                    data-delay="600"
                    >
                    
                 </p>
             </div><!-- .ms-slide slide04 end -->
         </div><!-- #masterslider end -->

         <div class="page-content parallax parallax01 mb-70">
             <div class="container">
                 <div class="row services-negative-top">
                     <div class="col-md-4 col-sm-4">
                         <div class="service-feature-box">
                             <div class="service-media">
                                 <img src="img/pics/transport1.jpg" alt="Trucking"/>

                                 <a href="/gallery" class="read-more02">
                                     <span>
                                  Saznaj više
                                         <i class="fa fa-chevron-right"></i>
                                     </span>
                                 </a>
                             </div><!-- .service-media end -->

                             <div class="service-body">
                                 <div class="custom-heading">
                                     <h4>@lang('pocetna.box1naslov')</h4>
                                 </div><!-- .custom-heading end -->

                                 <p>

    @lang('pocetna.box1tekst')
                                 </p>

                             </div><!-- .service-body end -->
                         </div><!-- .service-feature-box-end -->
                     </div><!-- .col-md-4 end -->

                     <div class="col-md-4 col-sm-4">
                         <div class="service-feature-box">
                             <div class="service-media">
                                 <img src="img/pics/imgground.jpg" alt="Trucking"/>

                                 <a href="/about" class="read-more02">
                                     <span>
                                        Saznaj više
                                         <i class="fa fa-chevron-right"></i>
                                     </span>
                                 </a>
                             </div><!-- .service-media end -->

                             <div class="service-body">
                                 <div class="custom-heading">
                                     <h4>   @lang('pocetna.box2naslov')</h4>
                                 </div><!-- .custom-heading end -->

                                 <p>
                                      @lang('pocetna.box2tekst')
                                 </p>
                             </div><!-- .service-body end -->
                         </div><!-- .service-feature-box-end -->
                     </div><!-- .col-md-4 end -->

                     <div class="col-md-4 col-sm-4">
                         <div class="service-feature-box">
                             <div class="service-media">
                                 <img src="img/pics/put.jpg" alt="Trucking"/>

                                 <a href="/news" class="read-more02">
                                     <span>
                                      Saznaj više
                                         <i class="fa fa-chevron-right"></i>
                                     </span>
                                 </a>
                             </div><!-- .service-media end -->

                             <div class="service-body">
                                 <div class="custom-heading">
                                     <h4> @lang('pocetna.box3naslov')</h4>
                                 </div><!-- .custom-heading end -->

                                 <p>
                                @lang('pocetna.box3tekst')

                                 </p>
                             </div><!-- .service-body end -->
                         </div><!-- .service-feature-box-end -->
                     </div><!-- .col-md-4 end -->
                 </div><!-- .row end -->

                 <div class="row">
                     <div class="col-md-12">
                         <a href="/demand" class="btn btn-big btn-yellow btn-centered">
                             <span>
                                @lang('pocetna.upit')
                         </a>
                     </div><!-- .col-md-12 end -->
                 </div><!-- .row end -->
             </div><!-- .container end -->
         </div><!-- .page-content end -->

         <div class="page-content">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="custom-heading02">
                             <h2>  @lang('pocetna.uslugekojenudimo')</h2>
                             <p>

                             </p>
                         </div><!-- .custom-heading02 end -->
                     </div><!-- .col-md-12 end -->
                 </div><!-- .row end -->

                 <div class="row mb-30">
                     <div class="col-md-6 col-sm-6">
                         <div class="service-icon-left-boxed">
                             <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                 <img src="img/svg/pi-truck-1.svg" alt="checklist icon"/>
                             </div><!-- .icon-container end -->

                             <div class="service-details">
                                 <h3>@lang('pocetna.drumskit')</h3>

                                 <p>
                                   @lang('pocetna.drumskitopis')
                                 </p>
                             </div><!-- .service-details end -->
                         </div><!-- .service-icon-left-boxed end -->


                     </div><!-- .col-md-6 end -->

                     <div class="col-md-6 col-sm-6">
                         <div class="service-icon-left-boxed">
                             <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                 <img src="img/svg/pi-warehouse-1.svg" alt="touch icon"/>
                             </div><!-- .icon-container end -->

                             <div class="service-details">
                                 <h3>@lang('pocetna.sil')</h3>

                                 <p>
                                  @lang('pocetna.silt')
                                 </p>
                             </div><!-- .service-details end -->
                         </div><!-- .service-icon-left-boxed end -->
                     </div><!-- .col-md-6 end -->


                 </div><!-- .row.mb-30 end -->

                 <div class="row">
                     <div class="col-md-6 col-sm-6">
                         <div class="service-icon-left-boxed">
                             <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                 <img src="img/svg/pi-cargo-boat-9.svg" alt="forktruck icon"/>
                             </div><!-- .icon-container end -->

                             <div class="service-details">
                                 <h3>@lang('pocetna.brodskit')</h3>

                                 <p>
                                  @lang('pocetna.brodskitopis')
                                 </p>
                             </div><!-- .service-details end -->
                         </div><!-- .service-icon-left-boxed end -->
                     </div><!-- .col-md-6 end -->



                     <div class="col-md-6 col-sm-6">
                         <div class="service-icon-left-boxed">
                             <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                 <img src="img/svg/pi-rail-delivery-3.svg" alt="touch icon"/>
                             </div><!-- .icon-container end -->

                             <div class="service-details">
                                 <h3>@lang('pocetna.zeleznickit')</h3>

                                 <p>
                                     @lang('pocetna.zeleznickitopis')
                                 </p>
                             </div><!-- .service-details end -->
                         </div><!-- .service-icon-left-boxed end -->
                     </div><!-- .col-md-6 end -->

                     <div class="col-md-12 col-sm-6">
                         <div class="service-icon-left-boxed avio">
                             <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                 <img src="img/svg/pi-globe-5.svg" alt="globe icon"/>
                             </div><!-- .icon-container end -->

                             <div class="service-details">
                                 <h3>@lang('pocetna.aviot')</h3>

                                 <p>
                                @lang('pocetna.aviotopis')
                                 </p>
                             </div><!-- .service-details end -->
                         </div><!-- .service-icon-left-boxed end -->
                     </div><!-- .col-md-6 end -->


                     <div class="col-md-12 col-sm-8">
                  <div class="custom-heading">
                      <h3>what clients say</h3>
                  </div><!-- .custom-heading end -->

                  <div class="carousel-container">
                      <div id="testimonial-carousel" class="owl-carousel owl-carousel-navigation">
                          <div class="owl-item">
                              <div class="testimonial">
                                  <p>
                                      Best customer support and
                                      response time I have ever seen...
                                      not to mention a kick ass theme!
                                      Great feeling from this purchase.
                                      Thank you Pixel Industry!
                                  </p>

                                  <div class="testimonial-author">
                                      <p>
                                          TRAVIS COPLAND, <br />
                                          Transport & Logistics Solutions
                                      </p>
                                  </div><!-- .testimonial-author end -->
                              </div><!-- .testimonial end -->
                          </div><!-- .owl-item end -->

                          <div class="owl-item">
                              <div class="testimonial">
                                  <p>
                                      Thanks for developing
                                      products to help many people
                                      to work as I do. Thank you!
                                      Success for all! I did not
                                      need to use the support,
                                      this never happened to me.
                                      Pocket Theme bought today
                                      for another client, very
                                      good too! Hug!
                                  </p>

                                  <div class="testimonial-author">
                                      <p>
                                          ADRIANOSP, <br />
                                          Themeforest member
                                      </p>
                                  </div><!-- .testimonial-author end -->
                              </div><!-- .testimonial end -->
                          </div><!-- .owl-item end -->

                          <div class="owl-item">
                              <div class="testimonial">
                                  <p>
                                      We have several sites now
                                      built in Elvyre across
                                      several servers and have had
                                      almost zero issues. The
                                      documentation is great and
                                      the featureset is phenomenal.
                                      It is the best looking
                                      pro-level and fairly easy-to-implement
                                      advanced theme we are currently
                                      regularly using. The end product
                                      is great and easy to use and
                                      configure. Highly recommended...
                                  </p>

                                  <div class="testimonial-author">
                                      <p>
                                          DIGITALMARKETINGASSOCIATES, <br />
                                          Themeforest member
                                      </p>
                                  </div><!-- .testimonial-author end -->
                              </div><!-- .testimonial end -->
                          </div><!-- .owl-item end -->
                      </div><!-- #testimonial-carousel end -->
                  </div><!-- .carousel-container end -->
              </div><!-- .col-md-4 end -->
                 </div><!-- .row.mb-30 end -->
             </div><!-- .container end -->
         </div><!-- .page-content end -->


         <div class="page-content custom-bkg bkg-dark-blue column-img-bkg dark mb-70">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-4 col-md-offset-2 custom-col-padding-both">
                         <div class="custom-heading">
                             <h3>@lang('pocetna.zkidtrans')</h3>
                         </div><!-- .custom-heading end -->

                         <p>

                         </p>

                         <ul class="service-list clearfix">
                             <li>
                                 <div class="icon-container">
                                     <img class="svg-white" src="img/svg/pi-cargo-scale.svg" alt="icon"/>
                                 </div><!-- .icon-container end -->

                                 <p>
                                  @lang('pocetna.zkidtrans1')
                                 </p>
                             </li>

                             <li>
                                 <div class="icon-container">
                                     <img class="svg-white" src="img/svg/pi-mark-energy.svg" alt="icon"/>
                                 </div><!-- .icon-container end -->

                                 <p>
                                  @lang('pocetna.zkidtrans2')
                                 </p>
                             </li>

                             <li>
                                 <div class="icon-container">
                                     <img class="svg-white" src="img/svg/pi-cargo-retail.svg" alt="icon"/>
                                 </div><!-- .icon-container end -->

                                 <p>
                                    @lang('pocetna.zkidtrans3')
                                 </p>
                             </li>

                             <li>
                                 <div class="icon-container">
                                     <img class="svg-white" src="img/svg/pi-truck-5.svg" alt="icon"/>
                                 </div><!-- .icon-container end -->

                                 <p>
                                @lang('pocetna.zkidtrans4')
                                 </p>
                             </li>


                         </ul><!-- .service-list end -->
                     </div><!-- .col-md-6 end -->

                     <div class="col-md-6 img-bkg01">
                         <div>
 					<img src="img/pics/kid4.jpg" data-src="" alt="Strongest distribution network"/>
 						</div>
                     </div>
                 </div><!-- .row end -->
             </div><!-- .container end -->
         </div><!-- .page-content.bkg-dark-blue end -->





             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="carousel-container">
                             <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
                                 <div class="owl-item"><img src="img/pics/ball.jpg" alt=""/></div>
                                 <div class="owl-item"><img src="img/pics/chemicalagrosava.jpg" alt=""/></div>
                                 <div class="owl-item"><img src="img/pics/knauf.jpg" alt=""/></div>
                                 <div class="owl-item"><img src="img/pics/phillips.jpg" alt=""/></div>
 								 <div class="owl-item"><img src="img/pics/chemicalagrosava.jpg" alt=""/></div>
                                 <div class="owl-item"><img src="img/pics/knauf.jpg" alt=""/></div>
                                 <div class="owl-item"><img src="img/pics/phillips.jpg" alt=""/></div>

                             </div><!-- .owl-carousel.owl-carousel-navigation end -->
                         </div><!-- .carousel-container end -->
                     </div><!-- .col-md-12 end -->
                 </div><!-- .row end -->
             </div><!-- .container end -->




@endsection
