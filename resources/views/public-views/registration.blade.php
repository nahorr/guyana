@extends('layouts.public.app')

@section('content')

   @include('layouts.public.includes.nav')

   @include('layouts.public.includes.nav-header')

  <!-- Promo Block -->


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
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Registration</h2>
                  </div>

                  <div class="row g-mb-30">
                    
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" class="form-group">
                      <div class="col-md-12">
                        <input type="hidden" name="cmd" value="_s-xclick">

                        <input type="hidden" name="hosted_button_id" value="BQS5Q3DNTYFLW">

                        <table>

                        <tr>
                          <td>
                            <input type="hidden" name="on0" value="Early bird fee until Oct 31 plus standard fees"><strong>Early bird fee until Oct 31 plus standard fees</strong>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <select name="os0" style="margin-bottom: 10px;">

                                    <option value="Indigenous Guyanese businesses' fee until Oct. 31">Indigenous Guyanese businesses' fee until Oct. 31 $300.00 USD</option>

                                    <option value="International and non-indigenous businesses' fee until Oct. 31">International and non-indigenous businesses' fee until Oct. 31 $650.00 USD</option>

                                    <option value="Indigenous Guyanese businesses fee after 31 Oct">Indigenous Guyanese businesses fee after 31 Oct $400.00 USD</option>

                                    <option value="International and non-indigenous businesses after 31 Oct.">International and non-indigenous businesses after 31 Oct. $850.00 USD</option>

                            </select> 
                          </td>
                        </tr>

                        </table>

                        <input type="hidden" name="currency_code" value="USD">

                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <br>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                      </div>
                    </form>

                  </div>
                </div>
                <!-- End Breaking News -->

                <hr>

                <div class="row">

                  <!-- Article Content -->
                    <div class="col-md-12 align-self-center">
                      <h3 class="h4 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Fee details: Early bird fee until Oct 31</a>
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
                      
                  </div>
                    <!-- End Article Content -->

                  <!-- Article Content -->
                    <div class="col-md-12 align-self-center">
                      <h3 class="h4 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-warning--hover" href="#!">Fee details: After 31 Oct</a>
                      </h3>

                      <div class="col-lg">
                        <ul class="list-unstyled g-mb-12 g-mb-0--md">
                          <li class="d-flex align-items-center g-mb-12">
                            <i class="icon-check d-block g-color-warning g-mr-8"></i>
                            <span class="d-block">Indigenous Guyanese businesses: $400</span>
                          </li>
                          <li class="d-flex align-items-center g-mb-12">
                            <i class="icon-check d-block g-color-warning g-mr-8"></i>
                            <span class="d-block">International and non-indigenous businesses: $850</span>
                          </li>
                          
                        </ul>
                      </div>
                      
                  </div>
                    <!-- End Article Content -->
                    
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