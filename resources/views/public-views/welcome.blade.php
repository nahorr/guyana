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
                <!-- Latest News -->
                <div class="g-mb-50">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Press Release</h2>
                  </div>

                  <div class="col-md-12">
                    <!-- Article (Leftside) -->
                    

                      <!--<img class="img-fluid w-100" src="{{asset('press-release/press_release_guyana_localcontent.pdf')}}" alt="press_release_guyana_localcontent">-->
                      <embed src="{{asset('press-release/press_release_guyana_localcontent.pdf')}}" type="application/pdf"   height="700px" width="100%">

                     
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