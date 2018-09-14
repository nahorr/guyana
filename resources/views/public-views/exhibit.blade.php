@extends('layouts.public.app')

@section('content')

   @include('layouts.public.includes.nav')

   @include('layouts.public.includes.nav-header')

 

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
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Why Exhibit?</h2>
                  </div>

                  <div class="row g-mb-30">
                    <!-- Article Image -->
                    <div class="col-md-5">
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img/exhibit/exhibit_guyana.png')}}" alt="exhibit guyana">

                        <figcaption class="g-pos-abs g-top-20 g-left-20">
                          <a class="btn btn-xs u-btn-pink text-uppercase rounded-0" href="#!">Exhibit</a>
                        </figcaption>
                      </figure>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-md-7 align-self-center">
                      <h3 class="h4 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Why Exhibit?:</a>
                      </h3>

                      <div class="col-lg">
                        <ul class="list-unstyled g-mb-12 g-mb-0--md">
                          <li class="d-flex align-items-center g-mb-12">
                            <i class="icon-check d-block g-color-primary g-mr-8"></i>
                            <span class="d-block">Connect with local and international businesses to improve your networking opportunities</span>
                          </li>
                          <li class="d-flex align-items-center g-mb-12">
                            <i class="icon-check d-block g-color-primary g-mr-8"></i>
                            <span class="d-block">As a local company, showcase your capabilities to deliver efficient and quality driven services to oil/gas and mining companies</span>
                          </li>
                          <li class="d-flex align-items-center g-mb-12">
                            <i class="icon-check d-block g-color-primary g-mr-8"></i>
                            <span class="d-block">Make your local content value statement and commitment to sustainable development</span>
                          </li>
                          <li class="d-flex align-items-center g-mb-12">
                            <i class="icon-check d-block g-color-primary g-mr-8"></i>
                            <span class="d-block">Improve the contents of your corporate social responsibility in your Annual Report through participation in the first Guyana Local Content Conference</span>
                          </li>
                          <li class="d-flex align-items-center g-mb-12">
                            <i class="icon-check d-block g-color-primary g-mr-8"></i>
                            <span class="d-block">Direct marketing and advertising to target audiences that could increase business conversion rates</span>
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
                  <a href="{{url('contact')}}" class="btn btn-xl u-btn-pink u-btn-hover-v2-2 g-letter-spacing-0_5 text-uppercase g-rounded-50 g-px-30 g-mr-10 g-mb-15">
                    <span class="pull-left text-left">
                      Contact us
                      <span class="d-block g-font-size-11">Contact us to reserve your exhibition space!</span>
                    </span>
                    <i class="fa fa-thumbs-up float-right g-font-size-42 g-ml-15"></i>
                  </a>
                  <!-- End Example Button -->
                    
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