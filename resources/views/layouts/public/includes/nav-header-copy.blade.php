<!-- Header -->
    <header id="js-header" class="u-header u-header--static">
      <!-- Top Bar -->
      <div class="u-header__section u-header__section--hidden u-header__section--dark g-bg-black g-py-7">
        <div class="container">
          <div class="row flex-column flex-md-row align-items-center justify-content-md-end text-uppercase g-font-weight-600 g-color-white g-font-size-13">
            <div class="col-auto mr-md-auto g-px-15">
              <i class="icon-communication-057 u-line-icon-pro g-font-size-20 g-valign-middle g-mr-1"></i>
              <a href="{{url('forum')}}">Forum</a>
            </div>

            <div class="col-auto g-px-15">
              <i class="icon-communication-165 u-line-icon-pro g-font-size-20 g-valign-middle g-mr-1"></i>
                <a href="https://live.localcontentworld.com/" target="_blank">Live Webcast</a>
            </div>

            <div class="col-auto g-px-15 text-center">
              <i class="fa fa-user g-valign-middle g-mr-5"></i>
              @if(Auth::check())
                 It's a Beautiful Day. Welcome - {{\Auth::user()->name}}
                <a href="{{url('home')}}" class="btn btn-sm u-btn-deeporange">Dashboard</a>
              @else
                <a href="{{url('/')}}" class="btn btn-sm u-btn-orange">Login/Register</a>
              @endif
              
            </div>

            <div class="col-auto g-px-15">
              <ul class="list-inline mb-0 g-mx-minus-3">
                <li class="list-inline-item g-valign-middle g-mx-3">
                  <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="https://www.facebook.com/guyanalocalcontent/" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item g-valign-middle g-mx-3">
                  <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="https://twitter.com/MarakConsulting" target="_blank">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item g-valign-middle g-mx-3">
                  <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="https://www.instagram.com/" target="_blank">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->
      <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->
            <a href="{{url('/')}}" class="navbar-brand d-flex">
              <img id="logo" src="{{asset('unify/assets/img/logo/guyana_localcontent_logo.jpg')}}" alt="guyana_localcontent_logo">
            </a>
            <!-- End Logo -->

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
               
                <!-- Home -->
                <li class="nav-item active g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut" data-max-width="60%" data-position="left">
                  <a id="mega-menu-home" class="nav-link g-py-7 g-px-0" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">Home</a>
                </li>
                <!-- End Home -->

                <!-- About -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-px-0" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">About</a>
                </li>
                <!-- End About -->

                <!-- About -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-px-0" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">Contact</a>
                </li>
                <!-- End About -->
                
                <!-- About -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-px-0" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">Registration</a>
                </li>
                <!-- End About -->            

                

               <!-- About -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-px-0" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">Agenda</a>
                </li>
                <!-- End About -->            

                <!-- About -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-px-0" href="{{url('speakers')}}" aria-haspopup="true" aria-expanded="false">speakers</a>
                </li>
                <!-- End About -->

                <!-- About -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-px-0" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">Sponsor</a>
                </li>
                <!-- End About -->

              </ul>
            </div>
            <!-- End Navigation -->

          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->