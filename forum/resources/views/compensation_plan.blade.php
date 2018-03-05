@extends('layouts.app')

@section('content')

<div class="ms-hero-page-override ms-hero-img-city ms-bg-fixed ms-hero-bg-dark-light">
    <div class="container">
      <div class="text-center">
        <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Our Compensation Plan</h1>
        <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">
          <span class="color-info" style="text-transform: capitalize;">.. See how we are making milionaires everyday with abundant food.</span></p>
      </div>
    </div>
</div>
      <div class="container">
        <div class="card card-primary card-hero animated fadeInUp animation-delay-7">
            <div class="">
                <div class="container mt-6">
        <h1 class="font-light">Our Compensation Plan</h1>
        <p class="lead color-primary">— See how we are making milionaires everyday with abundant food. </p>
        <div class="panel panel-light">
        <h4 class="visible-xs text-success">Stages</h4>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-6" role="tablist">
            <li class="wow fadeInDown animation-delay-6 active" role="presentation">
              <a href="#farms" aria-controls="windows" role="tab" data-toggle="tab" class="withoutripple">
                <i class="zmdi zmdi-home"></i>
                <span class="hidden-xs">Farm Stage</span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-4 " role="presentation">
              <a href="#stage1" aria-controls="macos" role="tab" data-toggle="tab" class="withoutripple">
                
                <i class="visible-xs zmdi zmdi-collection-item-1"></i>
                <i class="hidden-xs zmdi zmdi-run"></i>
                <span class="hidden-xs">Stage <i class="zmdi zmdi-collection-item-1"></i></span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-2" role="presentation">
              <a href="#stage2" aria-controls="linux" role="tab" data-toggle="tab" class="withoutripple">
              <i class="visible-xs zmdi zmdi-collection-item-2"></i>
                <i class="hidden-xs zmdi zmdi-money-box"></i>
                <span class="hidden-xs">Stage <i class="zmdi zmdi-collection-item-2"></i></span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-3" role="presentation">
              <a href="#stage3" aria-controls="android" role="tab" data-toggle="tab" class="withoutripple">
                <i class="hidden-xs zmdi zmdi-car"></i>
                <i class="visible-xs zmdi zmdi-collection-item-3"></i>
                <span class="hidden-xs">Stage <i class="zmdi zmdi-collection-item-3"></i></span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-6" role="presentation">
              <a href="#stage4" aria-controls="ios" role="tab" data-toggle="tab" class="withoutripple">
                <i class="hidden-xs zmdi zmdi-local-airport"></i>
                <i class="visible-xs zmdi zmdi-collection-item-4"></i>
                <span class="hidden-xs">Stage <i class="zmdi zmdi-collection-item-4"></i></span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-6" role="presentation">
              <a href="#stage5" aria-controls="ios" role="tab" data-toggle="tab" class="withoutripple">
                <i class="hidden-xs zmdi zmdi-hotel"></i>
                <i class="visible-xs zmdi zmdi-collection-item-5"></i>
                <span class="hidden-xs">Stage <i class="zmdi zmdi-collection-item-5"></i></span>
              </a>
            </li>
          </ul>
          <div class="panel-body">
            <!-- Tab panes -->
            <div class="tab-content mt-4">
              <div role="tabpanel" class="tab-pane active  in  fade" id="farms">
                <div class="row">
                  <div class="col-md-6 col-md-push-6">
                    <img src="assets/img/farm.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8"> 
                  </div>
                  <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Farms Stage <small> - Registration</small></h3> 
                    <p class="lead lead-md animated fadeInUp animation-delay-6"> 
                      At Stage 1, all rewards are in FOOD ITEMS via the concept of ‘Feed yourself and help feed others’.
                    </p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">
                       <ul style="list-style-type: none;">
                      
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Referral Bonus: $6.4</li>
                     
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Level Bonus (LB):$38.4</li>
                       
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Complete Stage (CS):$16.</li>
                       </ul>

                      <strong>NB: All payments at FARMS STAGE are rfgin FOOD ITEMS..</strong>
                    </p>

                    <div id="demo" class="collapse">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>

                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-5" data-toggle="collapse" data-target="#demo">
                        <i class="zmdi zmdi-info"></i> More Info</a>
                      <a href="{{url('/register')}}" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-account-add"></i> Join Now 
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane  fade" id="stage1">
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/img/greengarden.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6">
                    <h3 class="text-normal  animated fadeInUp animation-delay-4">Green Garden</h3>
                    <p class="lead lead-md  animated fadeInUp animation-delay-6">
                      At Stage 1, all rewards are in FOOD ITEMS via the concept of ‘Feed yourself and help feed others’.
                    </p>
                    <p class="lead lead-md  animated fadeInUp animation-delay-7">
                      <ul style="list-style-type: none;">
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Referral Bonus: $6.4</li>
                     
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Level Bonus (LB):$224</li>
                       
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Complete Stage (CS):$160.</li>
                       </ul>

                      <strong>NB: All payments at this stage are in FOOD ITEMS.</strong>
                    </p>

                    <!--hidden details not shown until the More INfo button is clicked-->
                     <div id="demo1" class="collapse">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>

                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-5" data-toggle="collapse" data-target="#demo1">
                        <i class="zmdi zmdi-info"></i> More Info</a>
                      <a href="{{url('/register')}}" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-account-add"></i> Join Now 
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="stage2">
                <div class="row">
                  <div class="col-md-6 col-md-push-6">
                    <img src="assets/img/goldengarden.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Golden Garden</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Free food items worth $150 for Seven (7) months.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">
                      <ul style="list-style-type: none;">
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Referral Bonus: $6.4</li>
                     
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Level Bonus (LB):$560</li>
                       
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Complete Stage (CS):$360.</li>
                       </ul>

                      <strong>NB: payment is 40% food items and 60% cash.</strong>
                    </p>
                    <!--hidden details not shown until the More INfo button is clicked-->
                     <div id="demo2" class="collapse">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>

                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-5" data-toggle="collapse" data-target="#demo2">
                        <i class="zmdi zmdi-info"></i> More Info</a>
                      <a href="{{url('/register')}}" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-account-add"></i> Join Now 
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="stage3">
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/img/greatgarden.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Great Garden</h3>
                    <p class="lead lead-md  animated fadeInUp animation-delay-6">40% food items and 60% cash. Free trip to Saudi Arabia for Hajj or Umrah (Lesser Hajj) or free trip to Israel or Dubai. All expenses paid inclusive of $5,000 Travelling Allowance.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">
                      <ul style="list-style-type: none;">
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Referral Bonus: $6.4</li>
                     
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Level Bonus (LB):$700</li>
                       
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Complete Stage (CS):$3,500.</li>

                         <li><i class="fa fa-chevron-right"></i>&nbsp; A brand new car worth $22,000.</li>
                         
                       </ul>

                      <strong>NB: Payment is 40% food items and 60% cash.</strong>
                    </p>
                    <!--hidden details not shown until the More INfo button is clicked-->
                     <div id="demo3" class="collapse">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>

                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-5" data-toggle="collapse" data-target="#demo3">
                        <i class="zmdi zmdi-info"></i> More Info</a>
                      <a href="{{url('/register')}}" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-account-add"></i> Join Now 
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="stage4">
                <div class="row">
                  <div class="col-md-6 col-md-push-6">
                    <img src="assets/img/famousfarm.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Famous Farm </h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">
                      Members at this level will receive 40% food items and 60% cash. They will also be entitled to $250 worth of food items for 12 months.Moreso, a GRAND AWARD of a SUV worth $30,000 will be added to the package. 
                    </p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">
                      <ul style="list-style-type: none;">
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Referral Bonus: $6.4</li>
                     
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Level Bonus (LB):$2,240</li>
                       
                         <li><i class="fa fa-chevron-right"></i>&nbsp; Complete Stage (CS):$5,000.</li>

                         <li><i class="fa fa-chevron-right"></i>&nbsp; A brand new car worth $30,000.</li>
                         
                       </ul>

                      <strong>NB: Payment is 40% food items and 60% cash.</strong>
                    </p>
                    <!--hidden details not shown until the More INfo button is clicked-->
                     <div id="demo4" class="collapse">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>

                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-5" data-toggle="collapse" data-target="#demo4">
                        <i class="zmdi zmdi-info"></i> More Info</a>
                      <a href="{{url('/register')}}" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-account-add"></i> Join Now 
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="stage5">
                <div class="row">
                  <div class="col-md-6 col-md-push-6">
                    <img src="assets/img/foodbank.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Food Bank</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">At this final stage, you live to earn $6,000 from every team member that joins you. You’re also entitled to the unique privilege of profit sharing from the company.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7"><strong>NB: Payment is 40% food items and 60% cash.</strong></p>
                    <!--hidden details not shown until the More INfo button is clicked-->
                     <div id="demo5" class="collapse">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>

                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-5" data-toggle="collapse" data-target="#demo5">
                        <i class="zmdi zmdi-info"></i> More Info</a>
                      <a href="{{url('/register')}}" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-account-add"></i> Join Now 
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- panel footer -->
          <div class="panel-footer hidden-md visible-sm hidden-lg visible-xs">
          <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-6" role="tablist">
            <li class="wow fadeInDown animation-delay-6 active" role="presentation">
              <a href="#farms" aria-controls="windows" role="tab" data-toggle="tab" class="withoutripple">
                <i class="zmdi zmdi-home"></i>
                <span class="hidden-xs">Farm Stage</span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-4 " role="presentation">
              <a href="#stage1" aria-controls="macos" role="tab" data-toggle="tab" class="withoutripple">
                
                <i class="visible-xs zmdi zmdi-collection-item-1"></i>
                <i class="hidden-xs zmdi zmdi-run"></i>
                <span class="hidden-xs">Stage <i class="zmdi zmdi-collection-item-1"></i></span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-2" role="presentation">
              <a href="#stage2" aria-controls="linux" role="tab" data-toggle="tab" class="withoutripple">
              <i class="visible-xs zmdi zmdi-collection-item-2"></i>
                <i class="hidden-xs zmdi zmdi-money-box"></i>
                <span class="hidden-xs">Stage <i class="zmdi zmdi-collection-item-2"></i></span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-3" role="presentation">
              <a href="#stage3" aria-controls="android" role="tab" data-toggle="tab" class="withoutripple">
                <i class="hidden-xs zmdi zmdi-car"></i>
                <i class="visible-xs zmdi zmdi-collection-item-3"></i>
                <span class="hidden-xs">Stage <i class="zmdi zmdi-collection-item-3"></i></span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-6" role="presentation">
              <a href="#stage4" aria-controls="ios" role="tab" data-toggle="tab" class="withoutripple">
                <i class="hidden-xs zmdi zmdi-local-airport"></i>
                <i class="visible-xs zmdi zmdi-collection-item-4"></i>
                <span class="hidden-xs">Stage <i class="zmdi zmdi-collection-item-4"></i></span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-6" role="presentation">
              <a href="#stage5" aria-controls="ios" role="tab" data-toggle="tab" class="withoutripple">
                <i class="hidden-xs zmdi zmdi-hotel"></i>
                <i class="visible-xs zmdi zmdi-collection-item-5"></i>
                <span class="hidden-xs">Stage <i class="zmdi zmdi-collection-item-5"></i></span>
              </a>
            </li>
          </ul>
          </div>
        </div>
        <!-- panel -->
</div>
            </div>
        </div>
      </div>
@endsection