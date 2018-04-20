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
                                  <a href="/contact">Kontakt</a>
                              </li>
                          </ul><!-- .quick links end -->
                      </div><!-- .col-md-6 end -->

                      <div class="col-md-6 col-xs-3">
                          <div class="wpml-languages enabled">
                              <a class="active" href="/sr">
                                  <img src="img/sr.png" alt="Serbian"/>

                                  <i class="fa fa-chevron-down"></i>
                              </a>

                              <ul class="wpml-lang-dropdown">
                                  <li>
                                      <a href="/en">
                                          <img src="img/en.png" alt="English"/>
                                      </a>
                                  </li>


                              </ul><!-- .wpml-lang-dropdown end -->
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
                                          <a href="index.html">
                                            <!-- <img src="img/logokidtrans.jpg" alt="Trucking Transportation and Logistics HTML Template"/> -->
                                                      <h1> KID TRANS</h1>
                                          </a>
                                      </div><!-- .logo end -->
                                  </div><!-- .navbar-header start -->

                                  <!-- MAIN NAVIGATION -->
                                  <div class="collapse navbar-collapse">
                                      <ul class="nav navbar-nav">
                                          <li>
                                              <a href="/">{{ __('meni.naslovna') }}</a>

                                          </li><!-- .dropdown end -->
                                          <li class="dropdown">
                                              <a href="" data-toggle="dropdown" class="dropdown-toggle">{{ __('meni.usluge') }}</a>
                                              <ul class="dropdown-menu">
                                                  <li><a href="/truck">{{ __('meni.drumksi') }}</a></li>

                                                  <li><a href="logistic">{{ __('meni.carinjenje') }}</a></li>
                                                  <li><a href="ship">{{ __('meni.brodski') }}t</a></li>
                                                  <li><a href="airplane">{{ __('meni.avio') }}</a></li>
                                                  <li><a href="train">{{ __('meni.zeleznicki') }}</a></li>
                                              </ul><!-- .dropdown-menu end -->
                                          </li><!-- .dropdown end -->



                                          <li>
                                  <a href="/demand">Cene prevoza</a>
                                          </li>
                                          <li>
                                  <a href="about">O nama</a>
                                          </li>
                                            <li>
                                    <a href="gallery">Galerija</a>
                                            </li>
                                            <li>
                                    <a href="contact">Kontakt</a>
                                            </li>


                                      </ul><!-- .nav.navbar-nav end -->

                                      <!-- RESPONSIVE MENU -->
                                      <div id="dl-menu" class="dl-menuwrapper">
                                          <button class="dl-trigger">Open Menu</button>

                                          <ul class="dl-menu">

                                            <li>
                                                <a href="/">Početna</a>

                                            </li>
                                            <li>
                                                  <li><a href="#">Cene prevoza</a></li>


                                            </li>
                                              <li>
                                                  <a href="#">USLUGE</a>
                                                  <ul class="dl-submenu">
                                                      <li>
                                                        <li><a href="services01.html">Drumski transport</a></li>

                                                        <li><a href="warehousing.html">Carinjenje i logstika</a></li>
                                                        <li><a href="supply-chain-management.html">Brodski transport</a></li>
                                                        <li><a href="packaging-options.html">Avio transport</a></li>
                                                        <li><a href="consulting-services.html">Železnički transport</a></li>

                                                      </li>

                                                  </ul><!-- dl-submenu end -->
                                              </li>
                                              <li>
                                                    <li><a href="#">Cene prevoza</a></li>


                                              </li>
                                              <li>
                                                    <li><a href="gallery01.html">Galerija</a></li>


                                              </li>
                                              <li>
                                                    <li><a href="onama.html">O nama</a></li>


                                              </li>

                                              <li>
                                                    <li><a href="kontakt.html">Kontakt</a></li>


                                              </li>


                                          </ul><!-- .dl-menu end -->
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