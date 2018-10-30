@extends('layouts.public.app')

@section('content')

  @include('layouts.public.includes.nav')

   @include('layouts.public.includes.nav-header-home')

 <section>
       
   <!-- Team Blocks v12 -->
   <section class="g-bg-secondary g-py-100">
         <div class="text-center g-mb-50">
            <header class="text-center g-width-60x--md mx-auto g-mb-50">
	          <h2 class="h1 g-color-gray-dark-v1 g-font-weight-300">CONFERENCE SPEAKERS</h2>
	         
	        </header>
	        <div class="g-mb-40">
                    <div class="u-heading-v3-1 g-mb-30">
                      <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Previous Speakers:</h2>
                    </div>

                    <!-- Article -->
                    <article>
                      <ul style="list-style-type: none;">
                        <li>
                          <h3 class="h6"><a class="g-font-weight-700">Dr. Goodluck Jonathan, former president of the Federal Republic of Nigeria</a></h3>
                        </li>
                        <li>
                          <h3 class="h6"><a class="g-font-weight-700">SABIC</a></h3>
                        </li>
                        <li>
                          <h3 class="h6"><a class="g-font-weight-700">International Finance Corporation</a></h3>
                        </li>
                        <li>
                          <h3 class="h6"><a class="g-font-weight-700">African Development Bank</a></h3>
                        </li>
                        <li>
                          <h3 class="h6"><a class="g-font-weight-700">ENH, National Oil Company, Republic of Mozambique</a></h3>
                        </li>
                        <li>
                          <h3 class="h6"><a class="g-font-weight-700">Baker III Institute for Public Policy</a></h3>
                        </li>
                        <li>
                          <h3 class="h6"><a class="g-font-weight-700">University of Bradford</a></h3>
                        </li>
                        <li>
                          <h3 class="h6"><a class="g-font-weight-700">House Chairman, Committee on Gas, Nigerian National Assembly</a></h3>
                        </li>
                        <li>
                          <h3 class="h6"><a class="g-font-weight-700">National University of General Sarmiento, Argentina</a></h3>
                        </li>
                        <li>
                          <h3 class="h6"><a class="g-font-weight-700">TransAlta, Calgary, Canada</a></h3>
                        </li>
                        <li>
                          <h3 class="h6"><a class="g-font-weight-700">ENH, National Oil Company, Republic of Mozambique</a></h3>
                        </li>
                        <li>
                          <h3 class="h6"><a class="g-font-weight-700">Miranda Alliance Business Development LLC, Houston, Texas</a></h3>
                        </li>
                      </ul>
                    </article>
                    <!-- End Article -->

                    
                  </div>
         </div>

         <div class="container">
           	<div id="shortcode12">
	             <div class="shortcode-html">

	               <!-- Team Block 1 -->
	               <div class="row">
	               	<div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/defualt.png')}}" alt="Dr. Mark Bynoe">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Keynote Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Dr. Mark Bynoe</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Head, Department of Energy</p>
	                     <!-- End Info -->

	                     <hr class="g-brd-gray-light-v4 g-my-15">

	                     <!-- Contact Info -->
	                     <!-- <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       <li class="g-mb-5">
		                        <i class="fa fa-globe g-mr-10"></i>
		                         http://www.business.gov.gy/
	                       </li>
	                     </ul> -->
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>

	                 <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/ministry_of_presidency.jpg')}}" alt="Ministry of Presidency">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Ministry of Presidency</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Government of Guyana</p>
	                     <!-- End Info -->

	                     <hr class="g-brd-gray-light-v4 g-my-15">

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       <li class="g-mb-5">
	                         <i class="fa fa-globe g-mr-10"></i>
	                         https://motp.gov.gy/
	                       </li>
	                       
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>

	                 <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/ministry_of_business.jpg')}}" alt="Ministry of Business">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Ministry of Business</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Government of Guyana</p>
	                     <!-- End Info -->

	                     <hr class="g-brd-gray-light-v4 g-my-15">

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                     	<li class="g-mb-5">
		                        <i class="fa fa-globe g-mr-10"></i>
		                         http://www.business.gov.gy/
	                       </li>
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>

	                 

	                 <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/university_of_guyana.jpg')}}" alt="University of Guyana">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">University of Guyana</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Government of Guyana</p>
	                     <!-- End Info -->

	                     <hr class="g-brd-gray-light-v4 g-my-15">

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       <li class="g-mb-5">
		                        <i class="fa fa-globe g-mr-10"></i>
		                         https://www.uog.edu.gy/
	                       </li>
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>


	               </div>
	               <hr>
	               <!-- End Team Block 1 -->

	               <!-- Team Block 2 -->
	               <div class="row">
	                 <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/keith_lewis.jpg')}}" alt="Keith Lewis">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Keith Lewis</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Subsea Consultant, Subsea Specialist Ltd.</p>
	                     <!-- End Info -->

	                     

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>

	                 <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/Marcelo_Neuman.jpg')}}" alt="Prof. Marcelo Neuman">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Prof. Marcelo Neuman</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Associate professor and researcher at National University of General Sarmiento, Argentina</p>
	                     <!-- End Info -->

	                     

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>

	                 <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/rogger_tissot.jpg')}}" alt="Roger Tissot">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Roger Tissot</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Senior Consultant Rene Roger Tissot. International Local Content Consultant</p>
	                     <!-- End Info -->

	                     

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>

	                 <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/defualt.png')}}" alt="Newell Dennison">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Mr. Newell Dennison</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Commissioner Guyana Geological and Mining Commission, Guyana</p>
	                     <!-- End Info -->

	                     

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>
	               </div>
	               <hr>
	               <!-- End Team Block 2 -->

	               <!-- Team Block 3 -->
	               <div class="row">
	                 <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/defualt.png')}}" alt="Newell Dennison">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Hon. Raphael G.C. Trotman, M.P</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Minister of Natural Resources, Guyana</p>
	                     <!-- End Info -->

	                     

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>
	                  <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/defualt.png')}}" alt="Newell Dennison">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Representative from The Petroleum Authority of Uganda</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Paper: Local Content: Uganda’s Experience</p>
	                     <!-- End Info -->

	                     

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>
	                 <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/defualt.png')}}" alt="Newell Dennison">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Tom Deeb</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Local Content Expert V.P. T&M Associates</p>
	                     <!-- End Info -->

	                     

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>
	                  <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/defualt.png')}}" alt="Newell Dennison">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Isabelle Ramodoo</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Senior Associate and Development Economist Intergovernmental Forum on Mining, Mineral, Metals and Sustainable Development(IGF/IISD)</p>
	                     <!-- End Info -->

	                     

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>
	               </div>
	               <hr>
	               <!-- End Team Block 3 -->

	               <!-- Team Block 3 -->
	               <div class="row">
	                 <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/defualt.png')}}" alt="Newell Dennison">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Representative from UNCTAD</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Paper: TBD</p>
	                     <!-- End Info -->

	                     

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>
	                 <div class="col-lg-3 col-sm-6 g-mb-30">
	                   <!-- Figure -->
	                   <figure class="g-color-gray-dark-v2">
	                     <!-- Figure Image -->
	                     <img class="w-100 g-mb-30" src="{{asset('unify/assets/img/speakers/defualt.png')}}" alt="Newell Dennison">
	                     <!-- End Figure Image -->

	                     <!-- Figure Info -->
	                     <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5"><strong>Speaker</strong></em>
	                     <h4 class="h5 g-color-black-light-v3 g-mb-5">Representative from Saipem</h4>
	                     <p class="g-font-size-13 g-color-gray-dark-v4">Paper: Saipem’s SELCE program</p>
	                     <!-- End Info -->

	                     

	                     <!-- Contact Info -->
	                     <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
	                       
	                     </ul>
	                     <!-- End Contact Info -->
	                   </figure>
	                   <!-- End Figure -->
	                 </div>
	                
	                  
	               </div>
	               <hr>
	               <!-- End Team Block 3 -->


	             </div>
           	</div>
       	</div>
   </section>
   <!-- End Team Blocks v12 -->
 </section>
  

  @include('layouts.public.includes.footer')

@endsection