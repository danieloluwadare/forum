@extends('layouts.app')


@section('content')
      <div class="ms-hero-page-override ms-hero-img-faq ms-bg-fixed ms-hero-bg-dark-light">
        <div class="container">
          <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">FREQUENTLY ASKED QUESTION (FAQ)</h1>
            <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">WE ARE HERE TO ANSWER YOU<br>
              <span class="color-info" style="text-transform: capitalize;">.. we are here for you always</span></p>
          </div>
        </div>
      </div>
      <div class="container">
          <div class="card card-primary card-hero animated fadeInUp animation-delay-7">
            <div class="card-block">
              <div class="row">
                <div class="col-lg-8 col-md-7">
                  <div class="card">
                    <div class="ms-hero-bg-primary ms-hero-img-mountain">
                      <h3 class="color-white index-1 text-center pb-4 pt-4 no-mb">Frequently Asked Questions</h3>
                    </div>
                    <div class="panel-group ms-collapse no-margin" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title ms-rotate-icon">
                            <a class="withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <i class="fa fa-question"></i> What is Sponsor ID</a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <p>
                              The Sponsor ID is the Membership ID of the person referring you. It is also called the Referrer’s ID.
                              This is the ID of the person who gets the $6.4 referrer bonus.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title ms-rotate-icon">
                            <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                               <i class="fa fa-question"></i> How Can I Register </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <p>
                              To register, you need to first get the registration PIN either by paying into the bank accounts, then send the payment details to info@happyworldmealgate.com or call the customer care line to inform them of the payment; then Pins worth that amount will be sent to you via an agreed means. You can also buy from any of our Branch with POS or Payment Teller. The go to this link, <a href="{{url('/register')}}">https://www.happyworldmealagate.org/join-now</a>  and fill the required details and click Submit.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title ms-rotate-icon">
                            <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                               <i class="fa fa-question"></i> When do i get the welcome pack after registration? </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            <p>
                              After buying Pins, you will get your Welcome Package Immediately (i.e. if the purchase was from any of our offices) or you can arrange with someone to get your Packages delivered to you if you bought online or from the bank and you are not close to any of our offices.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingFour">
                          <h4 class="panel-title ms-rotate-icon">
                            <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                               <i class="fa fa-question"></i> How can i move from one stage to another? </a>
                          </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                          <div class="panel-body">
                            <p>
                              Moving from One stage to another required you completing your matrix for that stage. For example: leaving the farm stage requires that you refer 6 people directly and subsequent stages requires that 14 of your “Downlines” from previous stage meet you in your current stage to complete that stages’ matrix.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingFive">
                          <h4 class="panel-title ms-rotate-icon">
                            <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                               <i class="fa fa-question"></i> How many can i register at once </a>
                          </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                          <div class="panel-body">
                            <p>
                              You can register 1, 3 or 7 at the same time. However, there is no limit as to the number of registrations you can do at the same time. 
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingSix">
                          <h4 class="panel-title ms-rotate-icon">
                            <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                               <i class="fa fa-question"></i> What is Position (Left, Right)?</a>
                          </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                          <div class="panel-body">
                            <p>
                              Position is the place you want to place your down line. For your matrix to be complete at every given stage, you need to balance your legs. Every Downline has to be positioned either on the LEFT LEG or RIGHT LEG of the parent. This positioning allow you to choose where to place a particular dowline that will complete your tree as shown below.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingSeven">
                          <h4 class="panel-title ms-rotate-icon">
                            <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                               <i class="fa fa-question"></i> What is Parent ID?</a>
                          </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                          <div class="panel-body">
                            <p>
                              Parent ID is the Membership ID of the person whom you want to place the new registration under.
                              The Parent of any down line is the immediate person above that the downline on whose left or right leg the downline is placed.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-5">
                  <div class="card">
                    <div class="ms-hero-bg-primary ms-hero-img-mountain">
                      <h3 class="color-white index-1 text-center pb-4 pt-4 no-mb">Contact Us</h3>
                    </div>
                    <div class="card-block">
                      <h3 class="color-primary">You have more questions?</h3>
                      <form class="">
                        <div class="form-group label-floating">
                          <label for="inputName" class="control-label">Name</label>
                          <input type="text" class="form-control" id="inputName"> </div>
                        <div class="form-group label-floating">
                          <label for="inputEmail" class="control-label">Email</label>
                          <input type="email" class="form-control" id="inputEmail"> </div>
                        <div class="form-group label-floating">
                          <label for="inputSubject" class="control-label">Subject</label>
                          <input type="text" class="form-control" id="inputSubject"> </div>
                        <div class="form-group label-floating">
                          <label for="textArea" class="control-label">Message</label>
                          <textarea class="form-control" rows="5" id="textArea"></textarea>
                        </div>
                        <div class="form-group text-right">
                          <button type="button" class="btn btn-danger">Cancel</button>
                          <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>


@endsection