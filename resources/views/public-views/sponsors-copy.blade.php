@extends('layouts.public.app')

@section('content')

   @include('layouts.public.includes.nav-header')

 {{-- @include('layouts.public.includes.header') --}} 

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
                
                <!-- Breaking News -->
                <div class="g-mb-60">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Why Sponsor</h2>
                  </div>

                  <div class="row g-mb-30">
                    <!-- Article Image -->
                    <div class="col-md-5">
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img-temp/400x270/img3.jpg')}}" alt="Image Description">

                        <figcaption class="g-pos-abs g-top-20 g-left-20">
                          <a class="btn btn-xs u-btn-pink text-uppercase rounded-0" href="#!">Internet</a>
                        </figcaption>
                      </figure>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-md-7 align-self-center">
                      <h3 class="h4 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Why Sponsor:</a>
                      </h3>

                      <p class="g-color-gray-dark-v2">1. Publicize your company as a local content proponent in Guyana.</p>
                      <p class="g-color-gray-dark-v2">2. Make history by identifying with the first ever local content conference in Guyana.</p>
                      <p class="g-color-gray-dark-v2">3. Improve your local content CSR profile to the Guyanese public.</p>
                      <p class="g-color-gray-dark-v2">4. Demonstrate sustainable local content commitment in Guyana.</p>
                      
                    </div>
                    <!-- End Article Content -->
                  </div>
                </div>
                <!-- End Breaking News -->

             
                <!-- Recent Videos -->
                <div class="u-heading-v3-1 g-mb-30">
                  <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Sponsors</h2>
                </div>

                <div class="row">
                  <!-- Article Video -->
                  <div class="col-lg-4 col-sm-6 g-mb-30">
                    <article>
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img-temp/400x270/img2.jpg')}}" alt="Image Description">

                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                          <a class="btn btn-xs u-btn-blue text-uppercase rounded-0" href="#!">Spa</a>
                        </figcaption>

                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                          <i class="fa fa-play g-left-2"></i>
                        </span>
                      </figure>

                      <h3 class="g-font-size-16 g-mb-10">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Clark Valberg is a new CEO of InVision..</a>
                      </h3>
                    </article>
                  </div>
                  <!-- End Article Video -->

                  <!-- Article Video -->
                  <div class="col-lg-4 col-sm-6 g-mb-30">
                    <article>
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img-temp/400x270/img6.jpg')}}" alt="Image Description">

                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                          <a class="btn btn-xs u-btn-pink text-uppercase rounded-0" href="#!">Marketing</a>
                        </figcaption>

                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                          <i class="fa fa-play g-left-2"></i>
                        </span>
                      </figure>

                      <h3 class="g-font-size-16 g-mb-10">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">How to run a ticket: Best 10 point..</a>
                      </h3>
                    </article>
                  </div>
                  <!-- End Article Video -->

                  <!-- Article Video -->
                  <div class="col-lg-4 col-sm-6 g-mb-30">
                    <article>
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img-temp/400x270/img7.jpg')}}" alt="Image Description">

                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                          <a class="btn btn-xs u-btn-teal text-uppercase rounded-0" href="#!">Art</a>
                        </figcaption>

                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                          <i class="fa fa-play g-left-2"></i>
                        </span>
                      </figure>

                      <h3 class="g-font-size-16 g-mb-10">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Skyscrapers from blocking sunlight..</a>
                      </h3>
                    </article>
                  </div>
                  <!-- End Article Video -->

                  <!-- Article Video -->
                  <div class="col-lg-4 col-sm-6 g-mb-30 g-mb-0--sm">
                    <article>
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img-temp/400x270/img9.jpg')}}" alt="Image Description">

                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                          <a class="btn btn-xs u-btn-darkred text-uppercase rounded-0" href="#!">Architecture</a>
                        </figcaption>

                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                          <i class="fa fa-play g-left-2"></i>
                        </span>
                      </figure>

                      <h3 class="g-font-size-16 g-mb-10">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Architects plan to from blocking out sunlight..</a>
                      </h3>
                    </article>
                  </div>
                  <!-- End Article Video -->

                  <!-- Article Video -->
                  <div class="col-lg-4 col-sm-6 g-mb-30 g-mb-0--sm">
                    <article>
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img-temp/400x270/img8.jpg')}}" alt="Image Description">

                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                          <a class="btn btn-xs u-btn-indigo text-uppercase rounded-0" href="#!">Coworking</a>
                        </figcaption>

                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                          <i class="fa fa-play g-left-2"></i>
                        </span>
                      </figure>

                      <h3 class="g-font-size-16 g-mb-10">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Cooltex is one of the best technology company..</a>
                      </h3>
                    </article>
                  </div>
                  <!-- End Article Video -->

                  <!-- Article Video -->
                  <div class="col-lg-4 col-sm-6">
                    <article>
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img-temp/400x270/img10.jpg')}}" alt="Image Description">

                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                          <a class="btn btn-xs u-btn-brown text-uppercase rounded-0" href="#!">Apple</a>
                        </figcaption>

                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                          <i class="fa fa-play g-left-2"></i>
                        </span>
                      </figure>

                      <h3 class="g-font-size-16 g-mb-10">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Cameron's silence on defence is shameful..</a>
                      </h3>
                    </article>
                  </div>
                  <!-- End Article Video -->
                </div>
                <!-- End Recent Videos -->

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