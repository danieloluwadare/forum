@extends('layouts.app')

@section('content')

	<div class="ms-hero-page ms-hero-img-portfolio ms-hero-bg-success mb-6">
        <div class="container">
          <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Portfolio</h1>
            <p class="lead lead-lg color-white text-center center-block mt-2 mb-4 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">EVERYDAY IS HAPPINESS 
              <span class="color-warning">AT HAPPY WORLD</span><br> Here are some of our events, tutorials, and more.</p>
            
          </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-3 hidden-sm hidden-xs">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="zmdi zmdi-filter-list"></i>Filter</h3>
              </div>
              <div class="card-block no-pb">
                <form class="form-horizontal">
                  <h4 class="no-m color-primary">Categories</h4>
                  <div class="form-group mt-1">
                    <div class="radio no-mb">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios0" value="option0" checked="" class="filter" data-filter="all"> All </label>
                    </div>
                    <div class="radio no-mb">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" class="filter" data-filter=".category-1"> Seminars </label>
                    </div>
                    <div class="radio no-mb">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" class="filter" data-filter=".food-colection"> Food Distribution </label>
                    </div>
                    <div class="radio no-mb">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" class="filter" data-filter=".category-3"> Campaigns </label>
                    </div>
                    <div class="radio no-mb">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4" class="filter" data-filter=".videos"> Videos </label>
                    </div>
                    
                  </div>
                </form>
               </div>
              <div class="card-block">
                <form class="form-horizontal">
                  <div class="form-group no-mt">
                    <div class="col-md-12">
                      <h4 class="no-m color-primary mb-2">Descriptions</h4>
                      <div class="togglebutton">
                        <label>
                          <input id="port-show" type="checkbox"> Show description </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="row" id="Container">
            @for($i=1; $i<=16; $i++)            
            	<div class="col-md-4 col-sm-6 mix food-colection">
                <div class="card">
                  <figure class="ms-thumbnail">
                    <img src="assets/img/thumbs/image{{$i}}-thumb.jpg" alt="" class="img-responsive">
                    <!-- <figcaption class="ms-thumbnail-caption text-center">
                      <div class="ms-thumbnail-caption-content">
                        <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                          <i class="zmdi zmdi-favorite"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                          <i class="zmdi zmdi-star"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                          <i class="zmdi zmdi-share"></i>
                        </a>
                      </div>
                    </figcaption> -->
                  </figure>
                  <div class="card-block text-center portfolio-item-caption hidden">
                    <h3 class="color-primary no-mt">Food Collection</h3>
                    <p>Members Celebrating their success at the Women deveopment centre, Agege</p>
                  </div>
                </div>
              </div>

              @if($i%3==0)
            	  <div class="clearfix"></div>
              @endif
            @endfor
            </div>

            <div class="col-md-4 col-sm-6 mix videos">
                <div class="card">
                  <figure class="ms-thumbnail">
                    <iframe max-width="854" max-height="480" src="https://www.youtube.com/embed/XpfsDuRk8nw" frameborder="0" allowfullscreen></iframe>
                    <!-- <figcaption class="ms-thumbnail-caption text-center">
                      <div class="ms-thumbnail-caption-content">
                        <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                          <i class="zmdi zmdi-favorite"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                          <i class="zmdi zmdi-star"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                          <i class="zmdi zmdi-share"></i>
                        </a>
                      </div>
                    </figcaption> -->
                  </figure>
                  <div class="card-block text-center portfolio-item-caption hidden">
                    <h3 class="color-primary no-mt">Food Collection</h3>
                    <p>Members Celebrating their success at the Women deveopment centre, Agege</p>
                  </div>
                </div>
              </div>
          </div>

          

          
        </div>
    </div>

@endsection