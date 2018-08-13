@section('menu')
  <div class="header-wrapper header-transparent">
      <!-- .header.header-style01 start -->
      <header id="header"  class="header-style01">
          <div id="top-bar-wrapper" class="clearfix">
              <div class="container">
                  <div class="row">
                      <div class="col-md-6 col-xs-9">
                          <ul id="quick-links" class="clearfix">
                              <li>
                                  <i class="fa fa-phone"></i>
                                  <span>+00 41 895 785 6985</span>
                              </li>

                              <li>
                                  <i class="fa fa-envelope"></i>
                                  <a href="/contact">@lang('meni.kontakt')</a>
                              </li>
                          </ul><!-- .quick links end -->
                      </div><!-- .col-md-6 end -->

                      <div class="col-md-6 col-xs-3">
                          <div class="wpml-languages enabled">
                            @if(App::isLocale('sr'))

                                          <img src="img/sr.png" alt="Serbian" />
                                          <i class="fa fa-chevron-down"></i>
                                      </a>
                                      <ul class="wpml-lang-dropdown">
                                          <li>
                                              <a href={{url('/', ['locale' => 'en'])}}>
                                                  <img src="img/en.png" alt="English"/>
                                              </a>
                                          </li>
                                      </ul>
                                  @else

                                          <img src="img/en.png" alt="English"/>
                                          <i class="fa fa-chevron-down"></i>
                                      </a>
                                      <ul class="wpml-lang-dropdown">
                                          <li>
                                              <a href={{url('/', ['locale' => 'sr'])}}>
                                                  <img src="img/sr.png" alt="Serbian"/>
                                              </a>
                                          </li>
                                      </ul>
                                  @endif
                          </div><!-- .wpml-languages.enabled end -->
                      </div><!-- .col-md-6 end -->
                  </div><!-- .row end -->
              </div><!-- .container end -->
          </div><!-- .top-bar-wrapper end -->

          <div class="header-inner">
              <!-- .container start -->
              <div class="container">
                  <!-- .main-nav start -->
                  <div class="main-nav">
                      <!-- .row start -->
                      <div class="row">
                          <div class="col-md-12">
                              <nav class="navbar navbar-default nav-left" role="navigation">

                                  <!-- .navbar-header start -->
                                  <div class="navbar-header">
                                      <div class="logo">
                                          <a href="/">
                                            <!-- <img src="img/logokidtrans.jpg" alt="Trucking Transportation and Logistics HTML Template"/> -->
                                                      <h1> KID TRANS</h1>
                                          </a>
                                      </div><!-- .logo end -->
                                  </div><!-- .navbar-header start -->

                                  <!-- MAIN NAVIGATION -->
                                  <div class="collapse navbar-collapse">
                                      <ul class="nav navbar-nav">
                                          <li>
                                              <a href="/">@lang('meni.naslovna')</a>

                                          </li><!-- .dropdown end -->
                                          <li class="dropdown">
                                              <a href="" data-toggle="dropdown" class="dropdown-toggle">@lang('meni.usluge')</a>
                                              <ul class="dropdown-menu">
                                                  <li><a href="/truck">@lang('meni.drumksi')</a></li>

                                                  <li><a href="logistic">@lang('meni.carinjenje')</a></li>
                                               <!-- <li><a href="ship">@lang('meni.brodski')</a></li>
                                                  <li><a href="airplane">@lang('meni.avio')</a></li>
                                                  <li><a href="train">@lang('meni.zeleznicki')</a></li>  -->
                                              </ul><!-- .dropdown-menu end -->
                                          </li><!-- .dropdown end -->






                                          <li>
                                  <a href="/demand">@lang('meni.cene')</a>
                                          </li>
                                          <li>
                                  <a href="about">@lang('meni.onama')</a>
                                          </li>
                                          <li class="dropdown">
                                              <a href="" data-toggle="dropdown" class="dropdown-toggle">@lang('meni.galerija')</a>
                                              <ul class="dropdown-menu">
                                                  <li><a href="/gallery">@lang('meni.galerija1')</a></li>
                                                        <li><a href="/drivereyes">@lang('meni.galerija2')</a></li>


                                              </ul><!-- .dropdown-menu end -->
                                          </li><!-- .dropdown end -->


                                            <li>
                                    <a href="news">@lang('meni.vesti')</a>
                                            </li>
                                            <li>
                                    <a href="contact">@lang('meni.kontakt')</a>
                                            </li>


                                      </ul><!-- .nav.navbar-nav end -->

                                      <!-- RESPONSIVE MENU -->
                                      <div id="dl-menu" class="dl-menuwrapper">
                                          <button class="dl-trigger">Open menu</button>

                                          <ul class="dl-menu">

                                            <li>
                                                <a href="/">@lang('meni.naslovna')</a>

                                            </li><!-- .dropdown end -->
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">@lang('meni.usluge')</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="/truck">@lang('meni.drumksi')</a></li>

                                                    <li><a href="logistic">@lang('meni.carinjenje')</a></li>
                                                 <!-- <li><a href="ship">@lang('meni.brodski')</a></li>
                                                    <li><a href="airplane">@lang('meni.avio')</a></li>
                                                    <li><a href="train">@lang('meni.zeleznicki')</a></li>  -->
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->






                                            <li>
                                    <a href="/demand">@lang('meni.cene')</a>
                                            </li>
                                            <li>
                                    <a href="about">@lang('meni.onama')</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">@lang('meni.galerija')</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="/gallery">@lang('meni.galerija1')</a></li>
                                                          <li><a href="/drivereyes">@lang('meni.galerija2')</a></li>


                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->


                                              <li>
                                      <a href="news">@lang('meni.vesti')</a>
                                              </li>
                                              <li>
                                      <a href="contact">@lang('meni.kontakt')</a>
                                              </li>


                                        </ul><!-- .nav.navbar-nav end -->

                                      </div><!-- #dl-menu end -->

                                      <!-- #search start -->

                                  </div><!-- MAIN NAVIGATION END -->
                              </nav><!-- .navbar.navbar-default end -->
                          </div><!-- .col-md-12 end -->
                      </div><!-- .row end -->
                  </div><!-- .main-nav end -->
              </div><!-- .container end -->
          </div><!-- .header-inner end -->
      </header><!-- .header.header-style01 -->
  </div><!-- .header-wrapper end -->
  @show
  </div>
