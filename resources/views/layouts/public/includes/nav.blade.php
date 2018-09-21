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
                <!-- End Home -->

                <!-- Home -->
                <li class="nav-item g-mr-10--lg g-mr-20--xl">
                  <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{url('registration')}}">
                    Registration
                  </a>

                </li>
                <!-- End Home -->
                
                <li class="nav-item g-mr-10--lg g-mr-20--xl">
                  <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{ url('agenda') }}">
                    Agenda
                  </a>

                </li>
                <!-- End Home -->
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
                  @if(Auth::check())
                    
                      <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="{{url('home')}}" target="_blank">Dashboard</a>
                    
                  @else
                  
                      <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="{{url('login')}}" target="_blank">Login/Register</a>
                    
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