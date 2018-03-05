@extends('layouts.app')

@section('content')

      <div class="ms-hero ms-hero-material">
          <span class="ms-hero-bg"></span>
          <div class="container">
            <div class="row">
              <div id="carousel-hero" class="carousel slide carousel-fade" data-ride="carousel" data-interval="7000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <div class="carousel-caption col-lg-6 col-md-7">
                      <div class="ms-hero-material-text-container">
                        <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                          <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">
                            <strong>Yes!</strong> <strong class="bold uppercase text-danger">Happy world meal gate</strong>  <strong class="success">is the solution</strong>.
                          </h1>
                          <i style="font-weight: bolder; text-decoration-style: initial;">to</i>
                          <h2 class="animated fadeInLeft animation-delay-18">Increasing 
                            <span class="color-warning">food price, loss of jobs, decreasing income and so much hunger in africa</span>.... </h2>
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp">
                                <i class="zmdi zmdi-airplane"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">Proffering a sustainable food/rewarding system for all -  civil servants, traders, artisans, pensioners, farmers, students, everyone</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <div class="ms-hero-material-buttons text-right">
                            <a href="{{url('/compensation')}}" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                              <i class="zmdi zmdi-eye"></i> See How</a>
                            <a href="{{url('/register')}}" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                              <i class="zmdi zmdi-account-add"></i> Join Now</a>
                          </div>
                        </div>
                      </div>
                      <!-- ms-hero-material-text-container -->
                    </div>
                     <!-- slider-img on the right -->
                    <div class="col-lg-6 col-md-5">
                      <div class="ms-hero-img animated zoomInUp animation-delay-30">
                        <img src="assets/img/thumbs-up.jpg" alt="" class="img-responsive">
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="carousel-caption col-lg-6 col-md-7">
                      <div class="ms-hero-material-text-container">
                        <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                          <h1 class="animated fadeInLeft animation-delay-15">
                            <strong>Join us</strong> and enjoy the amazing <strong>Benefits</strong> that we offer
                          </h1>
                          <h2 class="animated fadeInLeft animation-delay-18">You have the right  
                            <span class="color-warning">not to go to bed hungry,</span> we are here to make it possible.</h2>
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp">
                                <i class="fa fa-handshake-o"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">Partner with us and let’s make hunger, poverty, food insecurity and malnutrition history!</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-royal shadow-3dp">
                                <i class="zmdi zmdi-device-hub"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-21">Using the multi-level marketing (MLM) platform, together we will defeat hunger and increase disposable income of lower rung of society.</div>
                          </li>
                          <!-- <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp">
                                <i class="zmdi zmdi-coffee"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                          </li> -->
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <div class="ms-hero-material-buttons text-right">
                            <a href="{{url('/compensation')}}" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                              <i class="zmdi zmdi-eye"></i> See How</a>
                            <a href="{{url('/register')}}" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                              <i class="zmdi zmdi-account-add"></i> Join Now</a>
                          </div>
                        </div>
                      </div>
                      <!-- ms-hero-material-text-container -->
                    </div>

                     <!-- slider-img on the right -->
                    <div class="col-lg-6 col-md-5">
                      <div class="ms-hero-img animated zoomInUp animation-delay-30">
                        <img src="assets/img/img-slide-2.jpg" alt="" class="img-responsive">
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="carousel-caption col-lg-6 col-md-7">
                      <div class="ms-hero-material-text-container">
                        <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                          <h1 class="animated fadeInLeft animation-delay-15"><strong>Happy and well Fed</strong> People are
                            <strong>Productive People</strong>.</h1>
                          <h2 class="animated fadeInLeft animation-delay-18">We are capable; We can do all
                            <span class="color-warning">if we are satisfied.</span>.</h2>
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp">
                                <i class="zmdi zmdi-cutlery"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">We are ready to keep you strong for the journey ahead. you have the right to good nutrition.</div>
                          </li>
                         
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <div class="ms-hero-material-buttons text-right">
                            <a href="{{url('/compensation')}}" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                              <i class="zmdi zmdi-eye"></i> See How</a>
                            <a href="{{url('/register')}}" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                              <i class="zmdi zmdi-account-add"></i> Join Now</a>
                          </div>
                        </div>
                      </div>
                      <!-- ms-hero-material-text-container -->
                    </div>

                     <!-- slider-img on the right -->
                    <div class="col-lg-6 col-md-5">
                      <div class="ms-hero-img animated zoomInUp animation-delay-30">
                        <img src="assets/img/img-slide-3.jpg" alt="" class="img-responsive">
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="carousel-caption col-lg-6 col-md-7">
                      <div class="ms-hero-material-text-container">
                        <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                          <h1 class="animated fadeInLeft animation-delay-15"><strong>Opportunity Lost</strong> May Never be
                            <strong>Regained</strong>.</h1>
                          <h2 class="animated fadeInLeft animation-delay-18">Join Happy World and
                            <span class="color-warning">Remain Happy Forever</span>.</h2>
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp">
                                <i class="zmdi zmdi-cutlery"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">We are passionate about empowering people to enable them meet their basic need: Food</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <div class="ms-hero-material-buttons text-right">
                            <a href="{{url('/compensation')}}" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                              <i class="zmdi zmdi-eye"></i> See How</a>
                            <a href="{{url('/register')}}" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                              <i class="zmdi zmdi-account-add"></i> Join Now</a>
                          </div>
                        </div>
                      </div>
                      <!-- ms-hero-material-text-container -->
                    </div>

                     <!-- slider-img on the right -->
                    <div class="col-lg-6 col-md-5">
                      <div class="ms-hero-img animated zoomInUp animation-delay-30">
                        <img src="assets/img/img-slide-4.jpg" alt="" class="img-responsive">
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="carousel-controls">
                    <!-- Controls -->
                    <a class="left carousel-control animated zoomIn animation-delay-30" href="#carousel-hero" role="button" data-slide="prev">
                      <i class="zmdi zmdi-chevron-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control animated zoomIn animation-delay-30" href="#carousel-hero" role="button" data-slide="next">
                      <i class="zmdi zmdi-chevron-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-hero" data-slide-to="0" class="animated fadeInUpBig animation-delay-27 active"></li>
                      <li data-target="#carousel-hero" data-slide-to="1" class="animated fadeInUpBig animation-delay-28"></li>
                      <li data-target="#carousel-hero" data-slide-to="2" class="animated fadeInUpBig animation-delay-29"></li>
                      <li data-target="#carousel-hero" data-slide-to="3" class="animated fadeInUpBig animation-delay-30"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- container -->
      </div>


      <!-- ms-hero ms-hero-black -->
      <div class="container mt-4">
        <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Welcome</h2>
        <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4">
          <strong>Happy World Meal Gate </strong> is a passionate and dynamic <strong>Multi Level Marketing (MLM)</strong> company of African extractions on a mission to bring smiles to people’s faces.<br/>We strongly believe hunger and malnutrition are a global threat and a monstrous emergency which must be tackled decisively and without delay.
          <br/>This can only be fully achieved via the provision of food which is obviously a basic human right as enshrined in the United Nations (UN) human rights charter.<br/>
          We are proffering a <strong>sustainable food/rewarding system</strong> which embraces civil servants, traders, artisans, pensioners, farmers, students and a wide array of low income earners and ensures that as soon as anyone registers on our portal and meet the requirements; they are rewarded, also generate much needed income and in the process drive their feeding expenses to the barest minimum. 
        </p>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-4">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info">
              <i class="zmdi zmdi-globe"></i>
            </span>
            <h4 class="color-info">Our Mission</h4>
            <p class=""><strong>Good nutrition and food security</strong> for all irrespective of income, status, creed or geographical location.</p>
            <a href="{{url('/about')}}" class="btn btn-info btn-raised">More</a>
          </div>
        </div>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-8">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <h4 class="color-warning">Our Vision</h4>
            <p class=""> To proffer <strong>timely,  and adaptable solutions</strong> to hunger and malnutrition across the African continent and the globe.</p>
            <a href="javascript:void(0)" class="btn btn-warning btn-raised">More</a>
          </div>
        </div>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-10">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg color-success">
              <i class="zmdi zmdi-play-circle"></i>
            </span>
            <h4 class="color-success">Our Philosophy</h4><strong>Happy and Well Fed People are Productive People</strong>
            <p class="">You have the right Not to go to bed Hungry</p>
            <a href="javascript:void(0)" class="btn btn-success btn-raised">More</a>
          </div>
        </div>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-6">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger">
              <i class="zmdi zmdi-flower-alt"></i>
            </span>
            <h4 class="color-danger">Our CSR</h4>
            <p class=""><strong>HappyWorld Foundation</strong> - A Move Towards Eradication of Hunger and Malnutrition from Our Society. </p>
            <a href="javascript:void(0)" class="btn btn-danger btn-raised">More</a>
          </div>
        </div>
      </div>


      <!-- container -->
      <div class="wrap wrap-mountain mt-6">
        <div class="container">
          <h2 style="color:#fff;" class="text-center  mb-6 wow fadeInDown animation-delay-5">Why Join Happy World Meal Gate?</h2>
          <div class="row">
            <div class="col-md-6 col-md-push-6 mb-4  center-block">
              <img src="assets/img/h-banner.jpg" alt="" class="img-responsive center-block wow zoomIn animation-delay-12 "> </div>
            <div class="col-md-6 col-md-pull-6 pr-6">
              <div class="card" style="background:transparent; color: #fff;">
                <ul class="list-group">
                  <li class="list-group-item wow fadeInLeft" animation-delay="7">
                    <i class="color-primary zmdi zmdi-accounts"></i>We are passionate about earth’s greatest resource: PEOPLE!</li>
                  <li class="list-group-item">
                    <i class="color-success zmdi zmdi-badge-check"></i>
                    Where others see challenges, we see solutions.</li>
                  <li class="list-group-item">
                    <i class="color-info zmdi zmdi-cutlery"></i>We are passionate about empowering people to enable them meet their basic need: Food.</li>
                  <li class="list-group-item">
                    <i class="color-danger zmdi zmdi-block"></i>Operation say NO TO HUNGER in your homes, families and communities.</li>
                  <li class="list-group-item">
                    <i class="color-warning zmdi zmdi-device-hub"></i>Using the multi-level marketing (MLM) platform, together we will defeat hunger and increase disposable income of lower rung of society.
                  </li>
                  <li class="list-group-item">
                    <i class="color-warning zmdi zmdi-male-female"></i>We believe good nutrition and food security is not an exclusive preserve of a few; but should be readily available to all irrespective of creed, status, income or geographical spread.
                  </li>
                  <li class="list-group-item">
                    <i class="color-warning zmdi zmdi-arrow-left"></i>Partner with us and let’s make hunger, poverty, food insecurity and malnutrition history!
                  </li>
                  <li class="list-group-item">
                    <i class="color-warning zmdi zmdi-cutlery"></i>Finally, we wholly concur with the Food & Agricultural Organization (FAO) motto:’Fiat Panis’ which when translated from Latin means ‘let there be bread’.
                  </li>
                </ul>
              </div>
              <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-warning btn-raised mr-1 wow flipInX animation-delay-14">
                  <i class="zmdi zmdi-chart-donut"></i> See How </a>
                <a href="javascript:void(0)" class="btn btn-info btn-raised wow flipInX animation-delay-16">
                  <i class="zmdi zmdi-case"></i> Join Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>


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

                      <strong>NB: All payments at FARMS STAGE are in FOOD ITEMS..</strong>
                    </p>

                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More Info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-account-add"></i> Join Now </a>
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
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised wow animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More Info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 wow animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-account-add"></i> Join Now </a>
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
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More Info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-account-add"></i> Join Now </a>
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
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More Info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-account-add"></i> Join Now </a>
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
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More Info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-account-add"></i> Join Now </a>
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
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-account-add"></i> Join Now </a>
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
 

      <div class="wrap wrap-danger mt-6">
        <h2 class="text-center no-m">Testimonies</h2>
        <div id="carousel-example-generic" class="carousel carousel-cards carousel-fade slide" data-ride="carousel" data-interval="7000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-2">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Empowering people with in a very simple way. Keep the good work.</p>
                          <footer>Sister Chidimma, CEO Joyce Kitchen, Ikeja.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-3">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>This is an opportunity for us as students.  We earn while we learn</p>
                          <footer>Femi Ogundele. Student, ABU Zaria.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-4">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>From Farmer to Food STuff Dealer; Happy World Has chaned my life.</p>
                          <footer>Onoja Abuh. Farmer, Benue Nigeria.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-2">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Happy World has brought hunger to a halt in our lives in a very short time.</p>
                          <footer>Dennis, Ebili. TRADER.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-3">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Thank you <strong>Happy World Meal Gate</strong> for free products that you put on our table. My children feel much closer to normal (as they say) Now that they can enjoy some of the same things their friends eat.</p>
                          <footer>Emmanuel Dahwa, Network Specialist, Lagos.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-4">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Awesome Food/Rewarding System. My income is on Auto-Pilot.</p>
                          <footer>Chinedu Mark, Student, LASU.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-2">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>With the trust developed over time, i stand with <strong>Happy World</strong> for life.</p>
                          <footer>Mohammed Jamiu. Trader, Aegege.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-3">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Hunger and Malnutrition has become history.</p>
                          <footer>Veronica Demian. Fashion Designer.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-4">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Happy World Is Feeding the world. No waiting time.</p>
                          <footer>Achimugu, A. E. Programmer, LIS Nigeria</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="zmdi zmdi-arrow-left"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="zmdi zmdi-arrow-right"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
@endsection
