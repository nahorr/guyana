@extends('layouts.public.app')

@section('content')

	@include('layouts.public.includes.nav-header')

  
  <section class="container g-pt-100 g-pb-40">
    <div class="row justify-content-between">
      <div class="col-md-7 g-mb-60">
        @include('flash::message')

        <h2 class="h2">Contact us</h2>
        <p class="g-color-gray-dark-v3 g-font-size-16">For quick response, please complete the contact form below or send us an email via info@marakconsulting.com </p>

        <hr class="g-my-40">
        <form action="{{url('/postcontact/')}}" method="POST">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-6 form-group g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Full Name:</label>
              <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" name="full_name" type="text">
            </div>

            <div class="col-md-6 form-group g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Email:</label>
              <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" name="email" type="email">
            </div>

            <div class="col-md-6 form-group g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Subject:</label>
              <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" name="message_subject" type="text">
            </div>

            <div class="col-md-6 form-group g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Phone:</label>
              <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" name="phone" type="text">
            </div>

            <div class="col-md-12 form-group g-mb-40">
              <label class="g-color-gray-dark-v2 g-font-size-13">Your Message:</label>
              <textarea class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="7" name="message" ></textarea>
            </div>

            <div class="col-md-12 form-group g-mb-40">
              <div class="g-recaptcha" data-sitekey="{{env('RE_CAPTCHA_SITEKEY')}}"></div>
            </div>
          </div>

          <button class="btn u-btn-primary rounded-3 g-py-12 g-px-20" type="submit" role="button">Send Enquiry</button>
        </form>
        <!-- End Contact Form -->
      </div>

      <div class="col-lg-5 d-flex align-items-end g-min-height-600 g-bg-cover g-bg-size-cover g-bg-white-gradient-opacity-v2--after g-mb-60" data-bg-img-src="{{asset('unify/assets/img/img1.jpg')}}">
        <div class="w-100 text-center g-pos-rel g-z-index-1 g-pa-20 g-pa-50--sm mt-auto">
          <div class="g-mb-30">
            <h2 class="g-color-white g-font-weight-600">Marak Alliance, <span class="g-color-primary">LLC</span></h2>
            <p class="g-color-white-opacity-0_8">2502 La Branch St.
              <br>Houston, TX 77004.</p>
          </div>

          <div class="g-mb-30">
            <h3 class="g-color-primary g-font-weight-600 g-font-size-12 text-uppercase"><i class="g-color-primary g-font-size-20 icon-communication-033 u-line-icon-pro"></i> Phone number</h3>
            <span class="g-color-white g-font-size-20">832-404-7429</span>
          </div>

          <div class="g-mb-30">

            <h3 class="g-color-primary g-font-weight-600 g-font-size-12 text-uppercase"><i class="g-color-primary g-font-size-20 icon-communication-062 u-line-icon-pro"></i> Email</h3>
            <span class="g-color-white g-font-size-20"> execoffice@goga.gy</span>
          </div>
          
        </div>

      </div>

    </div>
  </section>

  <section class="dzsparallaxer auto-init height-is-based-on-content use-loading" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
    <div class="divimage dzsparallaxer--target w-100 g-bg-repeat" style="height: 200%; background-image: url(/unify/assets/img/bg/pattern4.png)"></div>

    <div class="container text-center g-py-50--md g-py-20">
      <h2 class="h2 text-uppercase g-font-weight-300">Enquires from within Guyana:</h2>
      <p class="lead g-px-100--md g-mb-2">Email: <a href="mailto:execoffice@goga.gy"> execoffice@goga.gy</a></p>
      <p class="lead g-px-100--md g-mb-2">Address: 189 Charlotte Street, Lacytown, Georgetown, Guyana, South America.</p>
      <p class="lead g-px-100--md g-mb-2"><a href="https://www.localcontentotc2018.com"> Website: www.goga.gy</a></p>
      
    </div>

    <div class="container text-center g-py-50--md g-py-20">
      <h2 class="h2 text-uppercase g-font-weight-300">International Enquiries:</h2>
      <p class="lead g-px-100--md g-mb-2">Email: info@marakconsulting.com</p>
      <p class="lead g-px-100--md g-mb-2">Address: 917 85th St SW, Calgary AB T3H 5Z9</p>
      <p class="lead g-px-100--md g-mb-2">Website: <a href="https://www.localcontentotc2018.com"> https://www.localcontentotc2018.com </a></p>
      <p class="lead g-px-100--md g-mb-2">Website: <a href="https://www.marakconsulting.com"> https://www.marakconsulting.com </a> </p>
      
    </div>
  </section>
 

	@include('layouts.public.includes.footer')

@endsection