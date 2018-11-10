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
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Agenda</h2>
                  </div>

                  <div class="row g-mb-30">
                    <!-- Article Image -->
                    <div class="col-md-5">
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img/sponsors/agenda_guyana.jpg')}}" alt="sponsors guyana">

                        <figcaption class="g-pos-abs g-top-20 g-left-20">
                          <a class="btn btn-xs u-btn-orange text-uppercase rounded-0" href="#!">Agenda</a>
                        </figcaption>
                      </figure>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-md-7 align-self-center">
                      <!-- Example Button -->
                      <a href="{{url('contact')}}" class="btn btn-xl u-btn-orange u-btn-hover-v2-2 g-letter-spacing-0_5 text-uppercase g-rounded-50 g-px-30 g-mr-10 g-mb-15">
                        <span class="pull-left text-left">
                          Contact us
                          <span class="d-block g-font-size-11">Contact Us for a copy of the Agenda</span>
                        </span>
                        <i class="fa fa-handshake-o float-right g-font-size-42 g-ml-15"></i>
                      </a>
                      <!-- End Example Button -->

                  </div>
                    <!-- End Article Content -->
                  </div>
                </div>
                <!-- End Breaking News -->

                <!-- Breaking News -->
                <div class="g-mb-60">
                  
                  <article class="g-mb-100">
                    <figure class="g-pos-rel mb-5">
                      <img class="img-fluid" src="{{asset('unify/assets/img-temp/900x400/GOGA_Conference_Advert.jpg')}}" alt="GOGA Conference Advert">

                    </figure>
                  </article>
                 
                </div>
                <!-- End Breaking News -->

              <hr>

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