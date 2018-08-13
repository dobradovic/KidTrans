@extends('layouts.app')

@section('content')
  <!-- .page-title start -->
          <div class="page-title-style01 page-title-negative-top pt-bkg04">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">


                      </div><!-- .col-md-12 end -->
                  </div><!-- .row end -->
              </div><!-- .container end -->
          </div><!-- .page-title-style01.page-title-negative-top end -->

          <div class="page-content">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="custom-heading02">
                              <h2>@lang('drumski.naslov')</h2>
                              <p>

                              </p>
                          </div><!-- .custom-heading02 end -->
                      </div><!-- .col-md-12 end -->
                  </div><!-- .row end -->
              </div><!-- .container end -->
          </div><!-- .page-content end -->
<div class="page-content">
    <div class="container">
        <div class="row">


            <div class="col-md-9">

                <br />


                <p>
                @lang('drumski.tekst')
                </p>
                <img src="img/pics/kid5.jpg" alt=""/>


                <br />

                <!--
                <div class="custom-heading">
                    <h3>industries covered</h3>
                </div>
                <ul class="service-list-big-icons clearfix">
                    <li>
                        <div class="icon-container">
                            <img src="img/svg/pi-cargo-retail.svg" alt="retail svg icon"/>
                        </div>

                        <h4>Textile Logistics</h4>
                    </li>

                    <li>
                        <div class="icon-container">
                            <img src="img/svg/pi-food-beverage.svg" alt="food and beverage svg icon"/>
                        </div>

                        <h4>Retail Logistics</h4>
                    </li>

                    <li>
                        <div class="icon-container">
                            <img src="img/svg/pi-mark-energy.svg" alt="retail svg icon"/>
                        </div>

                        <h4>Oil & Gas Logistics</h4>
                    </li>
                </ul><!-- .service-list-big-icons end -->

            </div><!-- .col-md-9 end -->
            <aside class="col-md-3 aside aside-left">
                <ul class="aside-widgets">
                    <li class="widget widget_nav_menu clearfix">
                        <div class="title">
                            <h3>@lang('drumski.uslugedrumski')</h3>
                        </div>

                        <ul class="menu">
                            <li class="menu-item">
                                <a href="/truck">@lang('drumski.uslugedrumski1')</a>
                            </li>

                            <li class="menu-item">
                                <a href="/logistic">@lang('drumski.uslugedrumski2')</a>
                            </li>

                            <!-- <li class="menu-item">
                                <a href="ship">Brodski transport</a>
                            </li>

                            <li class="menu-item">
                                <a href="airplane">Avio transport</a>
                            </li>

                            <li class="menu-item">
                                <a href="train">Železnički transport</a>
                            </li>
                          -->

                        </ul><!-- .menu end -->
                    </li><!-- .widget.widget_nav_menu end -->



                    <!-- .widget.widget-text start -->
                    <li class="widget widget-text">
                        <div class="title">
                            <h3>@lang('drumski.kontakt')</h3>
                        </div>

                        <img src="img/pics/contact.jpg" alt="contact us"/>

                        <br />


                        <a href="/contact" class="read-more">
                            <span>
                            @lang('drumski.kontakt1')
                                <i class="fa fa-chevron-right"></i>
                            </span>
                        </a>
                    </li><!-- .widget-text end -->
                </ul><!-- .aside-widgets end -->
            </aside><!-- .aside.aside-left end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->
@endsection
