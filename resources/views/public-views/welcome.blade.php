@extends('layouts.public.app')

@section('content')

   @include('layouts.public.includes.nav-header')

 @include('layouts.public.includes.header')

  <!-- Promo Block -->
        <section class="g-py-50">
          <div class="container">
            <!-- News Section -->
            <div class="row no-gutters">
              <div class="col-lg-6 g-pr-1--lg g-mb-30 g-mb-2--lg">
                <!-- Article -->
                <article class="u-block-hover">
                  <figure class="u-shadow-v25 g-bg-cover g-bg-white-gradient-opacity-v1--after">
                    <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="{{asset('unify/assets/img/welcome/guyanese_flag.jpg')}}" alt="guyanese flag">
                  </figure>

                  <span class="g-hidden-xs-down g-pos-abs g-top-30 g-left-30">
                    <a class="btn btn-xs u-btn-darkpurple text-uppercase rounded-0" href="#!">Guyanese Flag</a>
                  </span>

                  <div class="g-pos-abs g-bottom-30 g-left-30 g-right-30">
                    
                    <!-- <h3 class="h4 g-my-10">
                      <a class="g-color-white g-color-white--hover" href="#!">Our goal is to be the next billion company. In order to do that, we should work hard.</a>
                    </h3> -->

                  </div>
                </article>
                <!-- End Article -->
              </div>

              <div class="col-lg-6 g-pl-1--lg g-mb-30 g-mb-2--lg">
                <!-- Article -->
                <article class="u-block-hover">
                  <figure class="u-shadow-v25 g-bg-cover g-bg-white-gradient-opacity-v1--after">
                    <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="{{asset('unify/assets/img/welcome/kaieteur_falls_guyana.jpg')}}" alt="kaieteur falls guyana">
                  </figure>

                  <span class="g-hidden-xs-down g-pos-abs g-top-30 g-left-30">
                    <a class="btn btn-xs u-btn-red text-uppercase rounded-0" href="#!">Kaieteur Falls Guyana</a>
                  </span>

                  <div class="g-pos-abs g-bottom-30 g-left-30 g-right-30">
                    
                    <!-- <h3 class="h4 g-my-10">
                      <a class="g-color-white g-color-white--hover" href="#!">Why your customer support is very important? Learn the next 10 best tips.</a>
                    </h3> -->

                  </div>
                </article>
                <!-- End Article -->
              </div>

              
            <!-- News Section -->
          </div>
        </section>
        <!-- End Promo Block -->

        <!-- News Content -->
        <section class="g-pb-100">
          <div class="container">
            <!-- News Section 1 -->
            <div class="row g-mb-60">
              <!-- Articles Content -->
              <div class="col-lg-9 g-mb-50 g-mb-0--lg">
                <!-- Latest News -->
                <div class="g-mb-50">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Press Release</h2>
                  </div>

                  <div class="row">
                    <!-- Article (Leftside) -->
                    

                      <img class="img-fluid w-100" src="{{asset('press-release/press_release.jpg')}}" alt="Image Description">

                     
                  </div>
                </div>
                <!-- End Latest News -->

               

                <div id="stickyblock-end"></div>
              </div>
              <!-- End Articles Content -->

              <!-- Sidebar -->
              @include('layouts.public.includes.sidebar')
              <!-- End Sidebar -->
            </div>
            <!-- News Section 1 -->

           
          </div>
        </section>
        <!-- End News Content -->

    @include('layouts.public.includes.footer')

@endsection