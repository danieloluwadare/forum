@extend('layout.app')

@section('content')

<section id="contact" style="margin-bottom:30px;">
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
                   <p></p>
                   <address class="single-address">
                     <p>81 Adeniji Jones,Ikeja Lagos.</p>
                     <p>info@happyworldmealgate.com</p>
                     <p>(+234)809 183 0700</p>
                     <p>(+234)811 002 0644</p>
                   </address> 
                   <div class="footer-right contact-social" >
                      <a href="index.html"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>                
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
                    <button class="btn btn-warning" style="background-color:#FF881E;">Submit Comment</button>
                  </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
  </section>

  @endsection