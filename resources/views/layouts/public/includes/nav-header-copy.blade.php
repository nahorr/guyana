<!-- Header -->
      <header id="js-header" class="u-header u-header--static u-shadow-v19">
        <!-- Top Bar -->
        <div class="u-header__section g-brd-bottom g-brd-gray-light-v4 g-py-18">
          <div class="container">
            <div class="row align-items-center">
              <!-- Logo -->
              <div class="col-md-4">
                <a href="{{url('/')}}" class="navbar-brand">
                  <img src="{{asset('unify/assets/img/logo/guyana_localcontent_logo.jpg')}}" alt="Logo">
                </a>
              </div>
              <!-- End Logo -->

              <!-- Subscribe Form -->
               <div class="col-2 col-md-2">
                <div class="col-auto g-px-15">
                  <ul class="list-inline mb-0 g-mx-minus-3">
                    <li class="list-inline-item g-valign-middle g-mx-3">
                      <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="https://www.facebook.com/oilandgasgy/" target="_blank">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item g-valign-middle g-mx-3">
                      <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="https://twitter.com/OilandGasGY" target="_blank">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item g-valign-middle g-mx-3">
                      <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="https://www.instagram.com/oilandgasgy/" target="_blank">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End Subscribe Form -->

              <!-- Language -->
              <div class="col-4 col-md-2">
                <a class="g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover" href="#!">
                  <i class="fa fa-phone g-valign-middle g-mr-5"></i>+1 832 404 7429
                </a>
              </div>
              <!-- End Language -->


              <!-- Account -->
              <div class="col-6 col-md-4">

                @if(Auth::check())
                  <i class="fa fa-user g-valign-middle g-mr-5"></i>{{\Auth::user()->name}}
                
                @else
                  <div class="">
                    <a class="btn btn-sm u-btn-orange media align-items-center float-left g-text-underline--none--hover" href="{{url('login')}}">Login/Register</a>
                  </div>
                @endif

              </div>
              <!-- End Account -->
            </div>
          </div>
        </div>
        <!-- End Top Bar -->

        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
          <nav class="js-mega-menu navbar navbar-expand-lg g-px-0">
            <div class="container g-px-15">
              
              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 ml-auto" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider g-pa-0">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->

              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                <ul class="navbar-nav g-font-weight-600">
                  <!-- Home -->
                  <li class="nav-item g-mr-10--lg g-mr-20--xl">
                    <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{url('/')}}">
                      Home
                    </a>

                  </li>
                  <!-- End Home -->

                  <!-- Pages - Submenu -->
                  <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-20--xl">
                    <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{url('/')}}"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="nav-submenu--pages">
                      About
                    </a>

                    <!-- Submenu -->
                    <ul id="nav-submenu--pages" class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-brd-top g-brd-primary g-brd-top-2 g-mt-17"
                        aria-labelledby="nav-link--pages">
                      <li class="dropdown-item g-bg-secondary--hover">
                        <a class="nav-link g-color-secondary-dark-v1" href="{{url('/')}}">Press Release</a>
                      </li>
                    </ul>
                    <!-- End Submenu -->
                  </li>
                  <!-- End Pages - Submenu -->

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
                  <!-- Home -->
                  <li class="nav-item g-mr-10--lg g-mr-20--xl">
                    <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{asset('agenda/localcontent_guyana_2018_agenda.pdf')}}" target="_blank">
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
                                       
                      <a id="nav-link--home" class="btn btn-sm u-btn-darkpurple media align-items-center float-left g-text-underline--none--hover" href="{{url('home')}}">Dashboard</a>
                   
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