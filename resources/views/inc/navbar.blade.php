 <!--====================  header area ====================-->
 <div class="header-area header-sticky only-mobile-sticky">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header position-relative">
          <!-- brand logo -->
          <div class="logo">
          <a href="{{ url('/')}}">
              <img
                src="{{ asset('assets/images/logo/logo-dark.png')}}"
                class="img-fluid"
                alt="Akisan-Tech"
                style="width:55%"
              />
            </a>
          </div>

          <div class="header-right flexible-image-slider-wrap">
            <div class="header-right-inner" id="hidden-icon-wrapper">
              <!-- Header Search Form -->
              <div class="header-search-form d-md-none d-block">
                <form action="#" class="search-form-top">
                  <input
                    class="search-field"
                    type="text"
                    placeholder="Search…"
                  />
                  <button class="search-submit">
                    <i class="search-btn-icon fa fa-search"></i>
                  </button>
                </form>
              </div>

              <!-- Header Top Info -->
              <div
                class="swiper-container header-top-info-slider-werap top-info-slider__container"
              >
                <div
                  class="swiper-wrapper header-top-info-inner default-color"
                >
                  <div class="swiper-slide">
                    <div class="info-item">
                      <div class="info-icon">
                        <span class="fa fa-phone"></span>
                      </div>
                      <div class="info-content">
                        <h6 class="info-title">(+234)9099175200</h6>
                        <div class="info-sub-title">
                          info@akisantech.com
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="info-item">
                      <div class="info-icon">
                        <span class="fa fa-map-marker-alt"></span>
                      </div>
                      <div class="info-content">
                       
                        <div class="info-sub-title">
                          Lagos State, Nigeria
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="info-item">
                      <div class="info-icon">
                        <span class="fa fa-clock"></span>
                      </div>
                      <div class="info-content">
                        <h6 class="info-title">8:00AM - 6:00PM</h6>
                        <div class="info-sub-title">Monday to Saturday</div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="swiper-slide">
                    <div class="info-item">
                      <div class="info-icon">
                        <span class="fa fa-comment-alt-lines"></span>
                      </div>
                      <div class="info-content">
                        <h6 class="info-title">Online 24/7</h6>
                        <div class="info-sub-title">+122 123 4567</div>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>

              <!-- Header Social Networks -->
              <div class="header-social-networks style-icons">
                <div class="inner">
                  <a
                    class="social-link hint--black hint--bottom-left"
                    aria-label="Twitter"
                    href="https://twitter.com/akisantech"
                    data-hover="Twitter"
                    target="_blank"
                  >
                    <i class="social-icon fab fa-twitter"></i>
                  </a>
                 
                  <a
                    class="social-link hint--black hint--bottom-left"
                    aria-label="Instagram"
                    href="https://instagram.com/akisan_tech?igshid=YmMyMTA2M2Y="
                    data-hover="Instagram"
                    target="_blank"
                  >
                    <i class="social-icon fab fa-instagram"></i>
                  </a>
                  <a
                    class="social-link hint--black hint--bottom-left"
                    aria-label="Linkedin"
                    href="https://linkedin.com/company/akisan-tech"
                    data-hover="Linkedin"
                    target="_blank"
                  >
                    <i class="social-icon fab fa-linkedin"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- mobile menu -->
            <div
              class="mobile-navigation-icon d-block d-xl-none"
              id="mobile-menu-trigger"
            >
              <i></i>
            </div>
            <!-- hidden icons menu -->
            <div
              class="hidden-icons-menu d-block d-md-none"
              id="hidden-icon-trigger"
            >
              <a href="javascript:void(0)">
                <i class="far fa-ellipsis-h-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div
    class="header-bottom-wrap bg-theme-default d-md-block d-none header-sticky"
  >
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-bottom-inner">
            <div class="header-bottom-left-wrap">
              <!-- navigation menu -->
              <div class="header__navigation d-none d-xl-block">
                <nav class="navigation-menu navigation-menu--text_white">
                  <ul>
                    <li>
                    <a href="{{ url('/')}}"><span>Home</span></a>
                    </li>
                    <li
                      class="has-children has-children--multilevel-submenu"
                    >
                      <a href="#"><span>Company</span></a>
                      <ul class="submenu">
                      
                        <li>
                          <a href="{{route('leadership')}}"
                            ><span>Leadership</span></a
                          >
                        </li>
                        <li>
                          <a href="{{route('why_choose_us')}}"
                            ><span>Why choose us</span></a
                          >
                        </li>
                      </ul>
                    </li>
                    <li
                      class="has-children has-children--multilevel-submenu"
                    >
                      <a href="#"><span>IT solutions</span></a>
                      <ul class="submenu">
                        <li>
                          <a href="{{url('comingsoon')}}"
                            ><span>
                              Products
                            </span></a
                          >
                        </li>
                        <li>
                          <a href="{{url('comingsoon')}}"
                            ><span>
                              IT services</span></a
                          >
                        </li>
                        
                        <li>
                          <a href="{{url('comingsoon')}}"
                            ><span>Business solution</span></a
                          >
                        </li>
                        
                      </ul>
                    </li>

                    <li>
                      <a href="{{ url('contact-us')}}"><span>Contact Us</span></a>
                      <!-- multilevel submenu -->
                    </li>
                    <li>
                      <a href="{{ url('about-us')}}"
                        ><span>About Us</span></a
                      >
                      <!-- multilevel submenu -->
                    </li>
                  </ul>
                </nav>
              </div>
            </div>

            <div class="header-search-form">
              <form action="#" class="search-form-top style-03">
                <input
                  class="search-field"
                  type="text"
                  placeholder="Search…"
                />
                <button class="search-submit">
                  <i class="search-btn-icon fa fa-search"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--====================  End of header area  ====================-->
