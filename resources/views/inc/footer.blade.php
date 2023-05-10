  <!--====================  footer area ====================-->
  <div class="footer-area-wrapper bg-gray">
    <div class="footer-area section-space--ptb_80">
      <div class="container">
        <div class="row footer-widget-wrapper">
          <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
            <div class="footer-widget__logo mb-30">
              <img
                src="{{ asset('assets/images/logo/akisan-logo-dark.png')}}"
                class="img-fluid"
                alt=""
              />
            </div>
            <ul class="footer-widget__list">
              <li>
                {{-- 11 Ojulowo Imoshe,Anifowose Ikeja <br /> --}}
                Lagos State, Nigeria
              </li>
              <li>
                <a href="mailto:info@akisantech.com" class="hover-style-link"
                  >info@akisantech.com</a
                >
              </li>
              <li>
                <a
                  href="tel:(+234)9099175200"
                  class="hover-style-link text-black font-weight--bold"
                  >(+234)9099175200</a
                >
              </li>
              <!-- <li>
                <a
                  href="https://hasthemes.com/"
                  class="hover-style-link text-color-primary"
                  >www.Akisan Tech&#174;.xperts.com</a
                >
              </li> -->
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
            <h6 class="footer-widget__title mb-20">Products</h6>
            <ul class="footer-widget__list">
              <li><a href="#" class="hover-style-link">Managed IT</a></li>
              <li><a href="#" class="hover-style-link">IT Services</a></li>
              <li><a href="#" class="hover-style-link">Business Solution</a></li>
              
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
            <h6 class="footer-widget__title mb-20">Quick links</h6>
            <ul class="footer-widget__list">
              
              <li>
                <a href="#" class="hover-style-link">Terms of Services</a>
              </li>
              <li><a href="#" class="hover-style-link">Privacy Policy</a></li>
              <li>
                <a href="#" class="hover-style-link">Where to Find Us</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
            <h6 class="footer-widget__title mb-20">Support</h6>
            <ul class="footer-widget__list">
              <li><a href="#" class="hover-style-link">Forum Support</a></li>
            <li><a href="{{ url('contact-us')}}" class="hover-style-link">Contact Us</a></li>
             
             <li><a href="#" class="hover-style-link">Cookies Policy</a></li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
    <div class="footer-copyright-area section-space--pb_30">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-left">
            <span class="copyright-text"
              >&copy; 2023 Akisan Tech&#174;
              <a href="https://akisantech.com">All Rights Reserved.</a></span
            >
          </div>
          <div class="col-md-6 text-center text-md-right">
            <ul class="list ht-social-networks solid-rounded-icon">
              <li class="item">
                <a
                  href="https://twitter.com/akisantech"
                  target="_blank"
                  aria-label="Twitter"
                  class="social-link hint--bounce hint--top hint--primary"
                >
                  <i class="fab fa-twitter link-icon"></i>
                </a>
              </li>
              {{-- <li class="item">
                <a
                  href="https://facebook.com"
                  target="_blank"
                  aria-label="Facebook"
                  class="social-link hint--bounce hint--top hint--primary"
                >
                  <i class="fab fa-facebook-f link-icon"></i>
                </a>
              </li> --}}
              <li class="item">
                <a
                  href="https://instagram.com/akisan_tech?igshid=YmMyMTA2M2Y="
                  target="_blank"
                  aria-label="Instagram"
                  class="social-link hint--bounce hint--top hint--primary"
                >
                  <i class="fab fa-instagram link-icon"></i>
                </a>
              </li>
              <li class="item">
                <a
                  href="https://linkedin.com/company/akisan-tech"
                  target="_blank"
                  aria-label="Linkedin"
                  class="social-link hint--bounce hint--top hint--primary"
                >
                  <i class="fab fa-linkedin link-icon"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--====================  End of footer area  ====================-->

  <!--====================  scroll top ====================-->
  <a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
  </a>
  <!--====================  End of scroll top  ====================-->

  <!--====================  mobile menu overlay ====================-->
  <div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
      <div class="mobile-menu-overlay__header">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-6 col-8">
              <!-- logo -->
              <div class="logo">
                <a href="{{url('/')}}">
                  <img
                    src="{{asset('assets/images/logo/akisan-logo-dark.png')}}"
                    class="img-fluid"
                    alt="akisan tech logo"
                  />
                </a>
              </div>
            </div>
            <div class="col-md-6 col-4">
              <!-- mobile menu content -->
              <div class="mobile-menu-content text-right">
                <span
                  class="mobile-navigation-close-icon"
                  id="mobile-menu-close-trigger"
                ></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mobile-menu-overlay__body">
        <nav class="offcanvas-navigation">
          <ul>
            <li >
              <a href="{{url('/')}}">Home</a>
            
            </li>
            <li class="has-children">
              <a href="#">Company</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{route('about_us')}}"><span>About us</span></a>
                 
                </li>
                <li>
                  <a href="{{route('contact_us')}}"><span>Contact us</span></a>
                </li>
                <li>
                  <a href="{{route('leadership')}}"><span>Leadership</span></a>
                </li>
                <li>
                  <a href="{{route('why_choose_us')}}"><span>Why choose us</span></a>
                </li>
               
              </ul>
            </li>
            <li class="has-children">
              <a href="{{url('comingsoon')}}">IT solutions</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{url('comingsoon')}}"><span>Products</span></a>
                </li>
                <li>
                  <a href="{{url('comingsoon')}}"
                    ><span>IT Services</span></a
                  >
               
                <li>
                  <a href="{{url('comingsoon')}}"
                    ><span>Business solution</span></a
                  >
                </li>
               
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <!--====================  End of mobile menu overlay  ====================-->

  <!--====================  search overlay ====================-->
  <div class="search-overlay" id="search-overlay">
    <div class="search-overlay__header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-6 ml-auto col-4">
            <!-- search content -->
            <div class="search-content text-right">
              <span
                class="mobile-navigation-close-icon"
                id="search-close-trigger"
              ></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="search-overlay__inner">
      <div class="search-overlay__body">
        <div class="search-overlay__form">
          <form action="#">
            <input type="text" placeholder="Search" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--====================  End of search overlay  ====================-->