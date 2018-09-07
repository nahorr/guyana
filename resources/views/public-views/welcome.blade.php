@extends('layouts.public.app')

@section('content')

   @include('layouts.public.includes.nav-header')

 {{-- @include('layouts.public.includes.header') --}} 

  <!-- Icon Blocks -->
  <section class="g-py-100">
    <div class="container">
      <div class="row no-gutters">
        <img src="{{asset('unify/assets/img/speakers/press_release.jpg')}}" class="img-fluid" alt="Responsive image">
      </div>
    </div>
  </section>
  <!-- End Icon Blocks -->



    <!-- Call To Action -->
    <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(/unify/assets/img/bg/pattern5.png);">
      <div class="d-md-flex justify-content-md-center text-center">
        <div class="align-self-md-center">
          <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">Learn from the best and become the best. Register for the upcomming event.</p>
        </div>
        <div class="align-self-md-center">
          <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="{{url('/')}}">Register Now</a>
        </div>
      </div>
    </section>
    <!-- End Call To Action -->

    @include('layouts.public.includes.footer')

@endsection