@extends('layouts.app')

@section('content')

<div class="ms-hero-page-override ms-hero-img-airplane ms-bg-fixed ms-hero-bg-dark-light">
    <div class="container">
      <div class="text-center">
        <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Contact Us</h1>
        <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">
          <span class="color-info" style="text-transform: capitalize;">We will like to hear from you</span></p>
      </div>
    </div>
</div>
    <div class="container">
        <div class="card card-primary card-hero animated fadeInUp animation-delay-7">
            <div class="card-block">

              <div id="contact" style="">
                 <div class="container">
                   <div class="row">
                     <div class="col-md-12">
                       <div class="title-area">
                          <h2 class="title">Have any Questions?</h2>
                          <span class="line"></span>
                          <p style="text-align:center">You Can make your enquires by asking questions here </p>
                        </div>
                     </div>
                     <div class="col-md-12">
                       <div class="cotact-area">
                         <div class="row">
                           <div class="col-md-4">
                             <div class="contact-area-left">
                               <h4>Contact Info</h4>
                               <p><strong>NIGERIA HEAD OFFICE</strong></p>
                               <address class="single-address">
                                 <p>81 Adeniji Jones,Ikeja Lagos.</p>
                                 <p>info@happyworldmealgate.com</p>
                                 <p>(+234)809 183 0700</p>
                                 <p>(+234)811 002 0644</p>
                               </address> 
                               <hr>

                               <p><strong>OYO STATE OFFICE</strong> </p>
                               <address class="single-address">
                                 <p>Oxford Building, Bank Way, Opposite Union Bank, Dugbe, Ibadan.</p>
                                 <p>office.ibadan@happyworldmealgate.org</p>
                                 <p>(+234)809 967 6897</p>
                               </address>              
                             </div>
                           </div>
                           <div class="col-md-8 wow slideInRight">
                             <div class="contact-area-right">
                               <form action="" class="comments-form contact-form">
                                <div class="form-group">                        
                                  <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="form-group">                        
                                  <input type="email" class="form-control" placeholder="Email">
                                </div>
                                 <div class="form-group">                        
                                  <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group">                        
                                  <textarea placeholder="Comment" rows="3" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-warning" style="">Send Message</button>
                              </form>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
              </div>
          </div>
        </div>
      </div>
  <div class="clearfix">

  @endsection