@extends('layouts.public.app')

@section('content')

   @include('layouts.public.includes.nav')

   

  <!-- Promo Block -->


        <!-- News Content -->
        <section class="g-pb-10 g-mt-10">
          <div class="container">
            <!-- News Section 1 -->
            <div class="row g-mb-10">
              <!-- Articles Content -->
              <div class="col-lg-9 g-mb-10 g-mb-30--lg">
                
                <!-- Breaking News -->
                <div class="g-mb-10">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Registration</h2>
                  </div>
                  <article class="text-center g-mb-10">
                    <figure class="g-pos-rel mb-5">
                      <img class="img-fluid" src="{{asset('unify/assets/img-temp/900x400/img3-1.jpg')}}" alt="Image Description">

                    </figure>
                  </article>

                  <div class="row g-mb-10">
                    
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

                    <input type="hidden" name="cmd" value="_s-xclick">

                    <input type="hidden" name="hosted_button_id" value="GR75MCSNMZWNU">

                    <table>

                    <tr><td><input type="hidden" name="on0" value="Early bird fee until Oct 31 plus standard fees">Fee Details</td></tr><tr><td><select name="os0">

                                   <option value="Early bird fee until Oct 31">Early bird fee until Oct 31 : $650</option>

                                   <option value="Conference fee after Oct. 31">After 31 Oct : $850</option>

                    </select> </td></tr>

                    </table>

                    <input type="hidden" name="currency_code" value="USD">

                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

                  </form>

                  </div>
                </div>
                <!-- End Breaking News -->


                <div class="row">

                  <!-- Article Content -->
                    <!-- <div class="col-md-12 align-self-center">
                      <h3 class="h4 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"> Fee details: </a>
                      </h3>

                      <div class="col-lg">
                        <ul class="list-unstyled g-mb-12 g-mb-0--md">
                          <li class="d-flex align-items-center g-mb-12">
                            <i class="icon-check d-block g-color-primary g-mr-8"></i>
                            <span class="d-block">Indigenous Guyanese businesses: $300</span>
                          </li>
                          <li class="d-flex align-items-center g-mb-12">
                            <i class="icon-check d-block g-color-primary g-mr-8"></i>
                            <span class="d-block">International and non-indigenous businesses: $650</span>
                          </li>
                          
                        </ul>
                      </div>
                      
                  </div> -->
                    <!-- End Article Content -->

                  <!-- Article Content -->
                    <div class="col-md-12 align-self-center">
                      <h3 class="h5 g-mb-15">
                        Registration for Local Indigenous Guyanese businesses (50% or more shares are owned by Guyanese indigenes): Please complete this <a href="{{url('contact')}}">form</a>  to initiate your registration and receive any discount in operation.
                      </h3>

                      
                  </div>
                    <!-- End Article Content -->
                    
                </div>

                <!-- Breaking News -->
                <div class="g-mb-60">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Why Attend?</h2>
                  </div>

                  <div class="row g-mb-30">
                    <!-- Article Image -->
                    <div class="col-md-5">
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img/registration/why_attend_1.png')}}" alt="why attend guyana">

                        <figcaption class="g-pos-abs g-top-20 g-left-20">
                          <a class="btn btn-xs u-btn-lightred text-uppercase rounded-0" href="#!">1. Law/Policy makers</a>
                        </figcaption>
                      </figure>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-md-7 align-self-center">
                      <h3 class="h4 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">1. Law/Policy makers</a>
                      </h3>

                      <div class="col-lg">
                      <ul class="list-unstyled g-mb-12 g-mb-0--md">
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Exchange ideas and benchmarking targets with experienced local content decision makers from Africa, Caribbean, South America, Middle East, and Asia</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Encourage FDI: Promote FDI and create amiable environment for investors whilst designing policies that’ll increase sustainable local content</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Evaluate your current local content policies from lessons learned to be shared by decision makers from Middle East, Asia and Africa</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Legal and policy framework: Design your legal and policy framework to avoid pitfalls of implementation and unrealistic goals</span>
                        </li>
                       
                      </ul>
                    </div>

                  </div>
                    <!-- End Article Content -->
                  </div>
                </div>
                <!-- End Breaking News -->

                <!-- Breaking News -->
                <div class="g-mb-60">
                 
                  <div class="row g-mb-30">
                    <!-- Article Image -->
                    <div class="col-md-5">
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img/registration/why_attend_2.png')}}" alt="why attend guyana">

                        <figcaption class="g-pos-abs g-top-20 g-left-20">
                          <a class="btn btn-xs u-btn-blue text-uppercase rounded-0" href="#!">2. Oil/Gas/Mining Companies</a>
                        </figcaption>
                      </figure>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-md-7 align-self-center">
                      <h3 class="h4 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">2. Oil/Gas/Mining Companies: Review your local content plan</a>
                      </h3>

                      <div class="col-lg">
                      <ul class="list-unstyled g-mb-12 g-mb-0--md">
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Review your local content plan against international standards and benchmarks.</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Know what Guyanese companies actually expect from local content policies and how to manage expectations around local content</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Communicate your local content plan to indigenous businesses</span>
                        </li>
                                               
                      </ul>
                    </div>

                  </div>
                    <!-- End Article Content -->
                  </div>
                </div>
                <!-- End Breaking News -->

                 <!-- Breaking News -->
                <div class="g-mb-60">
                 
                  <div class="row g-mb-30">
                    <!-- Article Image -->
                    <div class="col-md-5">
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img/registration/why_attend_3.png')}}" alt="why attend guyana">

                        <figcaption class="g-pos-abs g-top-20 g-left-20">
                          <a class="btn btn-xs u-btn-yellow text-uppercase rounded-0" href="#!">3. Indigenous companies</a>
                        </figcaption>
                      </figure>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-md-7 align-self-center">
                      <h3 class="h4 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">3. Indigenous companies</a>
                      </h3>

                      <div class="col-lg">
                      <ul class="list-unstyled g-mb-12 g-mb-0--md">
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Network with E&P companies, servicing companies and EPC companies and understand their local content framework and supplier opportunities</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Learn what it takes to offer competitive services to quality driven international companies</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Talk to legal experts</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Talk to legal experts on local content policies</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Forge business relationship</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Meet one-on-one with international financial institutions to forge business relationship</span>
                        </li>                       
                      </ul>
                    </div>

                  </div>
                    <!-- End Article Content -->
                  </div>
                </div>
                <!-- End Breaking News -->

                <!-- Breaking News -->
                <div class="g-mb-60">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Who Should Attend the Conference?</h2>
                  </div>

                  <div class="row g-mb-30">
                    <!-- Article Image -->
                    <div class="col-md-5">
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img/registration/who_should_attend.png')}}" alt="why attend guyana">

                        <figcaption class="g-pos-abs g-top-20 g-left-20">
                          <a class="btn btn-xs u-btn-blue text-uppercase rounded-0" href="#!">Who Should Attend the Conference?</a>
                        </figcaption>
                      </figure>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-md-7 align-self-center">
                      <h3 class="h4 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Who Should Attend the Conference?</a>
                      </h3>

                      <div class="col-lg">
                      <ul class="list-unstyled g-mb-12 g-mb-0--md">
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Representatives</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Law and policy makers</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Current and prospective major oil/gas, and servicing companies in Guyana</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Local and international experts on local content</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Indigenous businesses – current and prospective</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Academic institutions</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Stakeholders involved in designing and implementing local content policy</span>
                        </li>
                                               
                      </ul>
                    </div>

                  </div>
                    <!-- End Article Content -->
                  </div>
                </div>
                <!-- End Breaking News -->
               
               <!-- Breaking News -->
                <div class="g-mb-60">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Cancellation Policy</h2>
                  </div>

                  <div class="row g-mb-30">
                    <!-- Article Image -->
                    <div class="col-md-5">
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img/registration/cancellation_policy.png')}}" alt="why attend guyana">

                        <figcaption class="g-pos-abs g-top-20 g-left-20">
                          <a class="btn btn-xs u-btn-darkred text-uppercase rounded-0" href="#!">Cancellation Policy</a>
                        </figcaption>
                      </figure>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-md-7 align-self-center">
                      <h3 class="h4 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Cancellation Policy</a>
                      </h3>

                      <div class="col-lg">
                      <ul class="list-unstyled g-mb-12 g-mb-0--md">
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">If a delegate is unable to attend the event they may recommend a substitute from the same company/organisation provided the substitution is done in writing to info@marakconsulting.com on or before 30 October 2018</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Registrations cancelled after 30 October 2018 will attract $85 administration cost</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Registrations cancelled after 30 October 2018 will not be eligible for refund</span>
                        </li>
                                      
                      </ul>
                    </div>

                  </div>
                    <!-- End Article Content -->
                  </div>
                </div>
                <!-- End Breaking News -->

                <!-- Breaking News -->
                <div class="g-mb-10">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Visa Application</h2>
                  </div>
                  <article class="text-center g-mb-10">
                    <figure class="g-pos-rel mb-5">
                      <img class="img-fluid" src="{{asset('unify/assets/img/registration/visa_application.png')}}" alt="Image Description">

                    </figure>
                  </article>

                  <div class="col-md-12">
                  <!-- Article (Leftside) -->
                                      

                    <!-- Article -->
                    <article class="text-center g-mb-100">
                      
                     
                      <!-- Info -->
                      <div class="g-px-50 g-px-100--md mb-4">
                        <h2 class="h3 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Organizers of the conference are happy to provide an official letter of invitation to delegates after registration. Email: info@marakconsulting.com for the letter.</a></h2>
                        <h3 class="h5 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Visitors from several countries, including U.S.A, Canada, Brazil and many of the South American and Caribbean nations, do not require a visa to travel to Guyana. Visitor from other countries requiring a visa should visit www.minfor.gov.gy for details. Useful travel guide within Guyana is available here: www.minfor.gov.gy</a></h3>
                        <h3 class="h5 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Delegates must comply with all visa requirements of the embassy as letter of invitation is not an assurance that your visa application will succeed. </a></h3>
                        
                      </div>
                      
                      <!-- End Info -->

                      

                    </article>
                    <!-- End Article -->

                     
                  </div>
                </div>
                <!-- End Breaking News -->

                <!-- Breaking News -->
                <div class="g-mb-60">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">HOTEL</h2>
                  </div>

                  <div class="row g-mb-30">
                    <!-- Article Image -->
                    <div class="col-md-5">
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                        <img class="img-fluid w-100" src="{{asset('unify/assets/img/registration/hotel.png')}}" alt="why attend guyana">

                        <figcaption class="g-pos-abs g-top-20 g-left-20">
                          <a class="btn btn-xs u-btn-blue text-uppercase rounded-0" href="#!">HOTEL</a>
                        </figcaption>
                      </figure>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-md-7 align-self-center">
                      <h3 class="h4 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Hotels which are near the conference venue, Arthur Chung Conference Centre, include:</a>
                      </h3>

                      <div class="col-lg">
                      <ul class="list-unstyled g-mb-12 g-mb-0--md">
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Grand Coastal</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Duke Lodge</span>
                        </li>
                        <li class="d-flex align-items-center g-mb-12">
                          <i class="icon-check d-block g-color-primary g-mr-8"></i>
                          <span class="d-block">Marriott and Pegasus</span>
                        </li>
                                                                       
                      </ul>
                    </div>
                    <p>Delegates can make reservation directly with any preferred hotel</p>
                    <p>For further enquiries please email: info@marakconsulting.com</p>

                  </div>
                    <!-- End Article Content -->
                  </div>
                </div>
                <!-- End Breaking News -->

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