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
                <!-- Latest News -->
                <div class="g-mb-50">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">First Guyanese Oil and Gas Local Content Conference</h2>
                  </div>

                  <div class="col-md-12">
                    <!-- Article (Leftside) -->
                    

                    <!-- Article -->
                    <article class="g-mb-100">
                      <figure class="g-pos-rel mb-5">
                        <img class="img-fluid" src="{{asset('unify/assets/img-temp/900x400/GOGA_Conference_Advert.jpg')}}" alt="GOGA Conference Advert">

                      </figure>
 
                      <!-- Category & Date -->
                      <ul class="list-inline g-color-secondary-dark-v1 g-font-weight-600 g-font-size-12 text-uppercase mb-3">
                        <li class="list-inline-item g-mr-10">
                          <i class="align-middle g-color-primary mr-1 icon-communication-020 u-line-icon-pro"></i>
                          <a class="g-font-weight-700" href="#!">Date</a>
                        </li>
                        <li class="list-inline-item">&#8226;</li>
                        <li class="list-inline-item g-ml-10">
                          <i class="align-middle g-color-secondary-dark-v1 mr-1 icon-education-124 u-line-icon-pro"></i>
                          Dec 04 – 05 2018
                        </li>
                      </ul>
                      <!-- End Category & Date -->

                      <!-- Info -->
                      <div class="mb-4">
                        <h2 class="h3 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">First Guyanese Oil and Gas Local Content Conference - A Roadmap to Advancing Value Addition and Sustainability</a></h2>
                        <h3 class="h5 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!"><strong class="g-color-primary">Venue:</strong> International Conference Centre, Railway Embankment Road Georgetown, Guyana</a>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.582398762825!2d-58.12082838522762!3d6.820536095070577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8dafee930cf19cf7%3A0x7e9d30ccb2dd6e73!2sArthur+Chung+Conference+Center!5e0!3m2!1sen!2sca!4v1537044357720" width="95%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></h3>
                        <h3 class="h5 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!"><strong class="g-color-primary">Organizers:</strong> Guyana Oil & Gas Association in conjunction with Marak Alliance, Calgary, Canada</a></h3>
                        <p>Conservative estimates that oil discovery in Guyana could be up to 1.4 billion barrels and oil is expected to be produced by 2020 with an average output of 100,000 bpd..  According to the IMF, “the main impact of the oil project is through fiscal revenues since the oil sector is fairly isolated from the rest of the economy, with no significant spill over at this time” (IMF article V Consultation May 2017). Liza Phase 1 alone is expected to generate over $7 billion in royalty and profit oil revenues for Guyana over the life of the project.</p>
                        <div id="hideHome" style="display: none;">
                        <p>However, in addition to the revenue from royalties and taxes, the Government of Guyana “is aware of the potential to capture and retain value within Guyana through the conduct of activities and the offer of services along the value chain of the resource”. Majority of key services are currently being imported due to lack of local capacity to offer required services. To that effect, the Government of Guyana has proposed a Local Content Policy which is currently under discussion.</p>
                        <p>Like a growing number of countries with large oil and gas reserves and low level of industrialization, Guyana is seeking to leverage from the exploitation of its oil wealth to achieve higher levels of industrialization, economic diversification and employment. However, achieving such lofty goals is not easy. </p>
                        <p>This first local content conference in Guyana is an opportunity for policy makers, oil companies, EPC, subcontractors, academics, consultants, the local business community and other interested stakeholders to gather for two days in Georgetown and discuss how local content in the extractive industries (oil, gas and mining) can benefit the creation of value in the country. Participants will have the opportunity to hear from policy makers from countries that have implemented similar policies, from international academics and consultants who have researched the economic benefits and challenges of these policies, from oil companies’ experiences with local content strategies and from the local business leaders.</p>
                        <p>The event is being organized by Guyana Oil & Gas Association, Georgetown, Guyana in conjunction with Marak Alliance, Calgary, Canada.</p>
                      </div>
                      </div>
                      <!-- End Info -->

                      <div class="g-mb-25">
                        <button type="button" class="btn btn-success" id="showReadMoreHome">Read More</button>
                        <button type="button" class="btn btn-danger" id="hideReadMoreHome" style="display: none;">Hide</button>
                      </div>
                      <script type="text/javascript">
                        jQuery(document).ready(function( $ ) {
                            // Your jQuery code here, using $ to refer to jQuery.
                            $("#showReadMoreHome").on("click", function(){
                              $("#hideHome").show();
                              $("#hideReadMoreHome").show();
                            });
                            $("#hideReadMoreHome").on("click", function(){
                              $("#hideHome").hide();
                              $("#hideReadMoreHome").hide();
                            });
                        });
                      </script>

                    </article>
                    <!-- End Article -->

                     
                  </div>
                </div>
                <!-- End Latest News -->

                <!-- Recent Videos -->
                <div class="u-heading-v3-1 g-mb-30">
                  <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Photo Gallary</h2>
                </div>

                <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-3 g-mb-30--md">
                        <div class="text-center u-block-hover g-bg-primary">
                          <img class="u-block-hover__img u-block-hover__main--blur" src="{{asset('unify/assets/img/gallary/1.jpg')}}" alt="Image Description">
                          <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30" href="javascript:;" data-fancybox="lightbox-gallery--15" data-src="{{asset('unify/assets/img/gallary/1.jpg')}}" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                            
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 g-mb-30--md">
                        <div class="text-center u-block-hover g-bg-primary">
                          <img class="u-block-hover__img u-block-hover__main--blur" src="{{asset('unify/assets/img/gallary/2.jpg')}}" alt="Image Description">
                          <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30" href="javascript:;" data-fancybox="lightbox-gallery--15" data-src="{{asset('unify/assets/img/gallary/2.jpg')}}" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                            
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 g-mb-30--md">
                        <div class="text-center u-block-hover g-bg-primary">
                          <img class="u-block-hover__img u-block-hover__main--blur" src="{{asset('unify/assets/img/gallary/3.jpg')}}" alt="Image Description">
                          <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30" href="javascript:;" data-fancybox="lightbox-gallery--15" data-src="{{asset('unify/assets/img/gallary/3.jpg')}}" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                            
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 g-mb-30--md">
                        <div class="text-center u-block-hover g-bg-primary">
                          <img class="u-block-hover__img u-block-hover__main--blur" src="{{asset('unify/assets/img/gallary/4.jpg')}}" alt="Image Description">
                          <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30" href="javascript:;" data-fancybox="lightbox-gallery--15" data-src="{{asset('unify/assets/img/gallary/4.jpg')}}" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                            
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 g-mb-30--md">
                        <div class="text-center u-block-hover g-bg-primary">
                          <img class="u-block-hover__img u-block-hover__main--blur" src="{{asset('unify/assets/img/gallary/5.jpg')}}" alt="Image Description">
                          <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30" href="javascript:;" data-fancybox="lightbox-gallery--15" data-src="{{asset('unify/assets/img/gallary/5.jpg')}}" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                            
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 g-mb-30--md">
                        <div class="text-center u-block-hover g-bg-primary">
                          <img class="u-block-hover__img u-block-hover__main--blur" src="{{asset('unify/assets/img/gallary/6.jpg')}}" alt="Image Description">
                          <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30" href="javascript:;" data-fancybox="lightbox-gallery--15" data-src="{{asset('unify/assets/img/gallary/6.jpg')}}" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                            
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 g-mb-30--md">
                        <div class="text-center u-block-hover g-bg-primary">
                          <img class="u-block-hover__img u-block-hover__main--blur" src="{{asset('unify/assets/img/gallary/7.jpg')}}" alt="Image Description">
                          <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30" href="javascript:;" data-fancybox="lightbox-gallery--15" data-src="{{asset('unify/assets/img/gallary/7.jpg')}}" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                            
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 g-mb-30--md">
                        <div class="text-center u-block-hover g-bg-primary">
                          <img class="u-block-hover__img u-block-hover__main--blur" src="{{asset('unify/assets/img/gallary/8.jpg')}}" alt="Image Description">
                          <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30" href="javascript:;" data-fancybox="lightbox-gallery--15" data-src="{{asset('unify/assets/img/gallary/8.jpg')}}" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                            
                          </a>
                        </div>
                      </div>
                                                         
                </div>
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