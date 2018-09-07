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
              <div class="col-lg-3">
                <!-- Useful Links -->
                <div class="g-mb-50">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Useful Links</h2>
                  </div>

                  <ul class="list-unstyled">
                    <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                      <h4 class="h6">
                        <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Wrapbootstrap Marketplace</a>
                      </h4>
                    </li>
                    <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                      <h4 class="h6">
                        <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Google Adwords &amp; Adsense</a>
                      </h4>
                    </li>
                    <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                      <h4 class="h6">
                        <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Web Design with UX/UI</a>
                      </h4>
                    </li>
                    <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                      <h4 class="h6">
                        <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Digital Marketing</a>
                      </h4>
                    </li>
                    <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                      <h4 class="h6">
                        <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Support Forum &amp; Community</a>
                      </h4>
                    </li>
                    <li class="mb-0">
                      <h4 class="h6">
                        <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Unify Template Pages</a>
                      </h4>
                    </li>
                  </ul>
                </div>
                <!-- End Useful Links -->

                <!-- Subscribe -->
                <div class="u-shadow-v25 u-bg-overlay g-bg-img-hero g-bg-white-gradient-opacity-v2--after g-py-40 g-px-20 g-mb-50" style="background-image: url(assets/img-temp/500x600/img1.jpg);">
                  <div class="u-bg-overlay__inner text-center">
                    <div class="g-mb-40">
                      <h2 class="g-color-white">Vancouver, BC</h2>
                      <p class="g-color-white-opacity-0_8">Unit 25 Suite 3, 925 Prospect PI,<br>Beach Resort, 23001</p>
                    </div>

                    <div class="g-mb-30">
                      <h3 class="d-inline-block g-bg-primary-opacity-0_6 g-color-white g-font-weight-600 g-font-size-12 text-uppercase g-py-5 g-px-10">Phone number</h3>
                      <span class="d-block g-color-white g-font-size-18">+01 (0) 333 444 55</span>
                    </div>

                    <div class="input-group rounded">
                      <input class="form-control g-brd-none g-font-size-13 g-px-13 g-py-11" type="email" placeholder="Your Email">
                      <div class="input-group-append">
                        <button class="btn u-btn-primary text-uppercase g-px-20 g-py-11" type="submit">
                          <i class="icon-envelope g-pos-rel g-top-1"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Subscribe -->

                <!-- Recent Posts -->
                <div class="g-mb-30">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Recent Posts</h2>
                  </div>

                  <!-- Article -->
                  <article class="media g-mb-30">
                    <a class="d-flex u-shadow-v25 mr-3" href="#!">
                      <img class="g-width-60 g-height-60" src="{{asset('unify/assets/img-temp/100x100/img4.jpg')}}" alt="Image Description">
                    </a>

                    <div class="media-body">
                      <h3 class="h6">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Best dessert recipes for breakfast which will..</a>
                      </h3>

                      <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                        <li class="list-inline-item">
                          July 20, 2017
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                          <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 18
                          </a>
                        </li>
                      </ul>
                    </div>
                  </article>
                  <!-- End Article -->

                  <!-- Article -->
                  <article class="media g-mb-30">
                    <a class="d-flex u-shadow-v25 mr-3" href="#!">
                      <img class="g-width-60 g-height-60" src="{{asset('unify/assets/img-temp/100x100/img5.jpg')}}" alt="Image Description">
                    </a>

                    <div class="media-body">
                      <h3 class="h6">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Stylish things to do, see and purchase..</a>
                      </h3>

                      <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                        <li class="list-inline-item">
                          July 16, 2017
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                          <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 31
                          </a>
                        </li>
                      </ul>
                    </div>
                  </article>
                  <!-- End Article -->

                  <!-- Article -->
                  <article class="media g-mb-30">
                    <a class="d-flex u-shadow-v25 mr-3" href="#!">
                      <img class="g-width-60 g-height-60" src="{{asset('unify/assets/img-temp/100x100/img6.jpg')}}" alt="Image Description">
                    </a>

                    <div class="media-body">
                      <h3 class="h6">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Government plans to test new primary school..</a>
                      </h3>

                      <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                        <li class="list-inline-item">
                          July 07, 2017
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                          <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 24
                          </a>
                        </li>
                      </ul>
                    </div>
                  </article>
                  <!-- End Article -->

                  <!-- Article -->
                  <article class="media">
                    <a class="d-flex u-shadow-v25 mr-3" href="#!">
                      <img class="g-width-60 g-height-60" src="{{asset('unify/assets/img-temp/100x100/img7.jpg')}}" alt="Image Description">
                    </a>

                    <div class="media-body">
                      <h3 class="h6">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Top 10 Luxury Hotels - 5 Star Best Luxury Hotels</a>
                      </h3>

                      <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                        <li class="list-inline-item">
                          July 11, 2017
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                          <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 46
                          </a>
                        </li>
                      </ul>
                    </div>
                  </article>
                  <!-- End Article -->
                </div>
                <!-- End Recent Posts -->

                <div id="stickyblock-start" class="js-sticky-block g-sticky-block--lg g-pt-20" data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">
                  <!-- Popular Videos -->
                  <div class="g-mb-50">
                    <article class="g-pos-rel">
                      <figure class="u-shadow-v25 g-bg-img-hero g-min-height-400" style="background-image: url(assets/img-temp/500x650/img2.jpg);"></figure>

                      <span class="text-center g-pos-abs g-top-20 g-left-0">
                        <a class="btn u-btn-red text-uppercase rounded-0" href="#!">Discover</a>
                        <small class="g-bg-black g-color-white g-pa-5 d-block">July 09, 2017</small>
                      </span>

                      <span class="u-icon-v3 g-font-size-default g-bg-white g-color-black g-bg-gray-dark-v2--hover g-color-white--hover g-rounded-50x g-cursor-pointer g-absolute-centered">
                        <i class="fa fa-play g-left-2"></i>
                      </span>

                      <header class="g-pos-abs g-bottom-20 g-left-0">
                        <h3 class="h5 g-bg-red-opacity-0_5 g-pa-5-10--sm">
                          <a class="g-color-white g-color-white--hover" href="#!">Traveling</a>
                        </h3>
                      </header>
                    </article>
                  </div>
                  <!-- End Popular Videos -->

                  <!-- Social Links -->
                  <div class="g-mb-50">
                    <div class="u-heading-v3-1 g-mb-30">
                      <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Social Links</h2>
                    </div>

                    <ul class="list-unstyled mb-0">
                      <li class="d-flex align-items-center justify-content-between g-mb-20">
                        <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                          <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-facebook g-bg-facebook--hover g-color-white rounded-circle g-mr-10" href="#!">
                            <i class="fa fa-facebook"></i>
                          </span>
                          Like
                        </a>
                        <span class="js-counter d-block g-color-gray-dark-v4">103832</span>
                      </li>
                      <li class="d-flex align-items-center justify-content-between g-mb-20">
                        <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                          <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-lightred g-bg-lightred--hover g-color-white rounded-circle g-mr-10" href="#!">
                            <i class="fa fa-google-plus"></i>
                          </span>
                          Add to Circle
                        </a>
                        <span class="js-counter d-block g-color-gray-dark-v4">47192</span>
                      </li>
                      <li class="d-flex align-items-center justify-content-between g-mb-20">
                        <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                          <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-instagram g-bg-instagram--hover g-color-white rounded-circle g-mr-10" href="#!">
                            <i class="fa fa-instagram"></i>
                          </span>
                          Follow Us
                        </a>
                        <span class="js-counter d-block g-color-gray-dark-v4">38291</span>
                      </li>
                      <li class="d-flex align-items-center justify-content-between g-mb-20">
                        <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                          <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-teal g-bg-teal--hover g-color-white rounded-circle g-mr-10" href="#!">
                            <i class="fa fa-medium"></i>
                          </span>
                          Writers
                        </a>
                        <span class="js-counter d-block g-color-gray-dark-v4">23871</span>
                      </li>
                      <li class="d-flex align-items-center justify-content-between">
                        <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                          <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-twitter g-bg-twitter--hover g-color-white rounded-circle g-mr-10" href="#!">
                            <i class="fa fa-twitter"></i>
                          </span>
                          Follow Us
                        </a>
                        <span class="js-counter d-block g-color-gray-dark-v4">391743</span>
                      </li>
                    </ul>
                  </div>
                  <!-- End Social Links -->
                </div>
              </div>
              <!-- End Sidebar -->
            </div>
            <!-- News Section 1 -->

          </div>
        </section>
        <!-- End News Content -->

    @include('layouts.public.includes.footer')

@endsection