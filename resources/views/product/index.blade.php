@extends('layouts.auth-layout.app')

@section('contents')

<div class="mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-11 ml-5 col-sm-11 col-xs-11">

              <!-- the products -->
              <div class="row">
              <div class="col-12 col-md-4 p-2">
          <div class="card bg-light">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators mb-0">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="first-slide w-100" src="img/Group 4.png" alt="First slide">
                      <div class="container">
                        <div class="carousel-caption site-bg-transparent-hover">
                          <!-- <h1>Example headline.</h1>
                          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="second-slide w-100" src="img/market.png" alt="Second slide">
                      <div class="container">
                        <div class="carousel-caption site-bg-transparent-hover">
                          <!-- <h1>Another example headline.</h1>
                          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="third-slide w-100" src="img/workspace1.png " alt="Third slide">
                      <div class="container">
                        <div class="carousel-caption site-bg-transparent-hover">
                          <!-- <h1>One more for good measure.</h1>
                          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>

              <p class=" mt-2  faded">
                School Management App is a web app that 
                helps both high schools and in managing thier students
                informations.
              </p>
              <hr class="m-0"> 
              <div class="app-details text-left mx-1">
                <div class="row">
                  <div class="col-6">
                    <span class="my-auto">App Name:</span>
                  </div>
                  <div class="col-6 faded">
                    <span>School Management App</span>
                  </div>
                </div>
                <hr class="m-0"> 
                <div class="row">
                  <div class="col-6">
                    <span class="my-auto">Product Type:</span>
                  </div>
                  <div class="col-6 faded">
                    <span>Web-App</span>
                  </div>
                </div>

                <hr class="m-0"> 
                <div class="row">
                  <div class="col-6">
                    <span class="my-auto">price:</span>
                  </div>
                  <div class="col-6 faded">
                      <span class=" badge ">$12.00</span>
                  </div>
                </div>

                <hr class="m-0"> 
                <div class="row">
                  <div class="col-6">
                    <!-- <span class="my-auto">price:</span> -->
                    <a href="#" class="btn border btn-default m-1">See More</a>
                  </div>
                  <div class="col-6 faded float-right">
                      <a href="#" class="btn border btn-primary m-1 px-5">Buy</a>
                  </div>
                </div>


              </div>
          
          </div>
      </div>

              </div>


            from the products pages
            </div>
        </div>
    </div>
</div>


@endsection