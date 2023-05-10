
    
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
                        src="assets/images/logo/logo-dark.png"
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
                  <a href="#">IT solutions</a>
                  <ul class="sub-menu">
                    <li>
                      <a href="#"><span>Products</span></a>
                    </li>
                    <li>
                      <a href="#"
                        ><span>IT Services</span></a
                      >
                   
                    <li>
                      <a href="#"
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