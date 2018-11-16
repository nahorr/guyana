    <!-- Header -->
    <header id="js-header" class="u-header u-header--static">
      <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-minus-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->
            
                <a href="{{url('/')}}" class="navbar-brand">
                  <img src="{{asset('unify/assets/img/logo/guyana_localcontent_logo.jpg')}}" alt="Logo">
                </a>
             
            <!-- End Logo -->

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
                <!-- Home -->
                <li class="nav-item g-mr-10--lg g-mr-20--xl">
                  <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{url('/')}}">
                    Home
                  </a>

                </li>
                <!-- End Home -->


                <!-- Home -->
                <li class="nav-item g-mr-10--lg g-mr-20--xl">
                  <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{url('contact')}}">
                    Contact
                  </a>

                </li>
                <li class="nav-item hs-has-sub-menu  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link--features" class="nav-link g-py-7 g-px-0"  href="{{url('registration')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--features">Registration</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu--features" aria-labelledby="nav-link--features">
                    <!-- Features - Headers -->
                    <li class="dropdown-item ">
                      <a class="nav-link" href="{{url('registration')}}">Register</a>
                    </li>
                    <li class="dropdown-item ">
                      <a class="nav-link" href="{{asset('registration_info_files/hotel_info.pdf')}}" target="_blank">Hotel Information and Rates</a>
                    </li>
                    <li class="dropdown-item ">
                      <a class="nav-link" href="{{asset('registration_info_files/taxi_info.pdf')}}" target="_blank">Taxi Information</a>
                    </li>
                    <!-- End Features - Headers -->

                  </ul>
                </li>
                <!-- End Home -->

               
                <!-- Features -->
                <li class="nav-item hs-has-sub-menu  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link--features" class="nav-link g-py-7 g-px-0" href="{{ url('agenda') }}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--features">Agenda</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu--features" aria-labelledby="nav-link--features">
                    <!-- Features - Headers -->
                    <li class="dropdown-item ">
                      <a class="nav-link" href="{{ url('agenda') }}" >Agenda</a>
                    </li>
                    <li class="dropdown-item ">
                      <a class="nav-link" href="{{asset('agenda_files/Guyana_Local_Content 2018_Draft_Agenda2.pdf')}}" target="_blank">Download Agenda</a>
                    </li>
                    <!-- End Features - Headers -->

                  </ul>
                </li>
                <!-- End Features -->
               

                <!-- Home -->
                <li class="nav-item g-mr-10--lg g-mr-20--xl">
                  <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{url('speakers')}}">
                    Speakers
                  </a>

                </li>
                <!-- End Home -->
                <!-- Home -->
                <li class="nav-item g-mr-10--lg g-mr-20--xl">
                  <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{url('sponsors')}}">
                    Sponsors
                  </a>

                </li>
                <!-- End Home -->
                <!-- Home -->
                <li class="nav-item g-mr-10--lg g-mr-20--xl">
                  <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{url('exhibit')}}">
                    Exhibit
                  </a>

                </li>
                <li class="nav-item g-mr-10--lg g-mr-20--xl">
                  <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{asset('press-release/press_release_guyana_localcontent.pdf')}}" target="_blank">
                    Press Release
                  </a>

                </li>
                <li class="nav-item g-mr-10--lg g-mr-20--xl">
                  @if(Auth::check())
                    
                      <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="{{url('home')}}" target="_blank">Dashboard</a>
                 
                  @endif
                </li>
                
                <!-- End Home -->
              </ul>
            </div>
            <!-- End Navigation -->
            
          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->