@extends('layouts.public.app')

@section('content')

   @include('layouts.public.includes.nav')

   @include('layouts.public.includes.nav-header-home')

 
        <!-- News Content -->
        <section class="g-pb-100 g-mt-60">
          <div class="container">
            <!-- News Section 1 -->
            <div class="row g-mb-60">
              <!-- Articles Content -->
              <div class="col-lg-9 g-mb-50 g-mb-0--lg">
                
                <!-- Breaking News -->
                <div class="g-mb-60">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Why Sponsor</h2>
                  </div>

                  <div class="row g-mb-30">
                    <!-- Article Image -->
                    <div class="col-md-5">
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img/sponsors/sponsors_guyana.jpg')}}" alt="sponsors guyana">

                        <figcaption class="g-pos-abs g-top-20 g-left-20">
                          <a class="btn btn-xs u-btn-blue text-uppercase rounded-0" href="#!">Sponsors</a>
                        </figcaption>
                      </figure>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-md-7 align-self-center">
                      <h3 class="h4 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Why Sponsor:</a>
                      </h3>

                      <div class="col-lg">
                      <ul class="list-unstyled g-mb-12 g-mb-0--md">
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Publicize your company as a local content proponent in Guyana</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Make history by identifying with the first ever local content conference in Guyana</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Improve your local content CSR profile to the Guyanese public</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Demonstrate sustainable local content commitment in Guyana</span>
                        </li>
                       
                      </ul>
                    </div>

                  </div>
                    <!-- End Article Content -->
                  </div>
                </div>
                <!-- End Breaking News -->

              <hr>

              <div class="row">

                <!-- Example Button -->
                <a href="{{url('contact')}}" class="btn btn-xl u-btn-blue u-btn-hover-v2-2 g-letter-spacing-0_5 text-uppercase g-rounded-50 g-px-30 g-mr-10 g-mb-15">
                  <span class="pull-left text-left">
                    Contact us
                    <span class="d-block g-font-size-11">Contact Us for Sponsorship Details</span>
                  </span>
                  <i class="fa fa-handshake-o float-right g-font-size-42 g-ml-15"></i>
                </a>
                <!-- End Example Button -->
                  
              </div>

                <div class="u-heading-v3-1 g-mb-30">
                  <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Sponsors</h2>
                </div>

                <div class="row">
                  <!-- Article Video -->
                  <div class="col-lg-4 col-sm-6 g-mb-30">
                    <article>
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img/sponsors/bpi.jpg')}}" alt="bpi">

                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                          <a class="btn btn-xs u-btn-blue text-uppercase rounded-0" href="#!">Silver Sponsor</a>
                        </figcaption>

                        
                      </figure>

                      <h3 class="g-font-size-16 g-mb-10">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Official Conference Coffee Provider: Bpi Guyana Inc.(Bpi) <a href="www.bpiguyana.com" target="_blank">www.bpiguyana.com</a>
                      </h3>
                    </article>
                  </div>
                  <!-- End Article Video -->

                   <!-- Article Video -->
                  <div class="col-lg-4 col-sm-6 g-mb-30">
                    <article>
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img/sponsors/MaysonBlackhouse.jpg')}}" alt="bpi">

                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                          <a class="btn btn-xs u-btn-red text-uppercase rounded-0" href="#!">Gold Sponsor</a>
                        </figcaption>

                        
                      </figure>

                      <h3 class="g-font-size-16 g-mb-10">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Gold Sponsor: Mayson Blackhouse Guyana <a href="https://maysonblackhouse.com/" target="_blank">Mayson Blackhouse Guyana</a>
                      </h3>
                    </article>
                  </div>
                  <!-- End Article Video -->

                 
                </div>
                

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