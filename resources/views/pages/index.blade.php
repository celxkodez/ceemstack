<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>CeEmstack</title>
  @include('portions.styles')

 {{-- @push('general-styles')--}}
    <style>
        .jumbotron {
          margin-bottom: 0rem;
        }
        .animated-div{
          top: 70%;
          z-index: 6;
        }
        .animated-div-child {

          /* display: none; */
          top: 90%;
        }

        .animated-div-child:hover{
          display: unset;
        }
        .first-animated {

          /* display: none; */
          top: -0;
          z-index: 6;
        }
        .first-animated:hover {
          background-color: rgba(0, 0, 3, 0.719);
          height: 23px !important;
          top: 60%;
          display: block;
          border-top-left-radius: 20%;
          border-top-right-radius: 20%;
        }
    </style>

  {{--@endpush--}}
</head>
<body>
    <header class=" card-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/home') }}">CeEmstack</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Suggestion</a>
                </li>

              </ul>
              @if(!Auth::check())
                <span class="sign-in-out">
                  <a href="{{ route('login') }}">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                    Login
                  </a>  |
                  <a href="{{ route('register') }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    Sign-up
                  </a>

                </span>

              @else
                <ul class="navbar-nav ">
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </li>
                  </ul>

              @endif
            </div>
          </nav>
    </header>
    <div class="jumbotron">
    <div class="row">

      <!-- //For the left widget -->
      <div class="col-md-2 d-none d-md-block">
        <div>
            <p>Got any suggestions we can help more in solving your problems?</p>
            <a href="">please drop your suggestion here!</a>
        </div>

      </div>

      <!-- FOR THE MAIN CONTENTS OF THE PAGE -->

      <div class="col-md-8">

        <div class="landing-page-content">

          <div class="row block-container">


          
          
          <!-- ************LEARN PART ENDS RIGHT HERE*********** -->


          <div class="row mb-3">
              <div class="col-12 col-md-6 text-center my-auto order-md-2">
                  <h1>Learn</h1>
                  <p>
                    New bee? learn with by building real world application
                    through mentorship and materials provided.
      
                  </p>
                  <a class="mx-5 w-50 btn btn-primary font-weight-bold " href=""> 
                    <i class="fas fa-hand-point-right    "></i>
                  </a>
                </div>
      
                <div class="col-12 col-md-6 text-center order-md-1">
                  <div class="text-center m-auto w-50">
                      <img class=" w-100" src="img/images/learn.svg" alt="">
                    <!-- <div class="position-relative h-100 text-center mr-auto ">
                      <img class=" img-responsive w-100 " src="img/learn.png" alt="">
                      <div class=" position-absolute w-100 first-animated h-100 text-center">
                        <div class="animated-div position-relative  w-100 text-center mx-auto ">
                          <a href="#" class="animated-div-child font-weight-bold">Start</a>
                         
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
          </div>



          <!-- ************LEARN PART ENDS RIGHT HERE*********** -->

           <!-- ***************PROJECTS PARTS STARTS RIGHT HERE*********** -->




           <div class="row mb-3">
              <div class="col-12 col-md-6 text-center my-auto mt-5 order-md-1">
                  <h1>Projects</h1>
                  <p>
                    Join in building real life for people and also earn and learn while 
                    collaborating to build projects.
      
                  </p>
                  <a class="mx-5 w-50 btn btn-primary font-weight-bold " href=""> 
                    <i class="fas fa-hand-point-right    "></i>
                  </a>
                </div>
      
                <div class="col-12 col-md-6 text-center mt-5 order-md-2">
                  <div class="text-center m-auto w-50">
                      <img class=" w-100" src="img/images/organizing-projects.svg" alt="">
                    <!-- <div class="position-relative h-100 text-center mr-auto ">
                      <img class=" img-responsive w-100 " src="img/learn.png" alt="">
                      <div class=" position-absolute w-100 first-animated h-100 text-center">
                        <div class="animated-div position-relative  w-100 text-center mx-auto ">
                          <a href="#" class="animated-div-child font-weight-bold">Start</a>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
           </div>
  

          <!-- ***************PROJECTS PARTS ENDS RIGHT HERE*********** -->


          <!-- ***************SOURCE CODES PARTS STARTS RIGHT HERE*********** -->




          <div class="row mb-3">
              <div class="col-12 col-md-6 text-center my-auto mt-5 slideanim order-md-2">
                  <h1>Source Codes</h1>
                  <p>
                    Dont like building from scratch? dont worry,
                    Get Source codes to existing projects. 
      
                  </p>
                  <a class="mx-5 w-50 btn btn-primary font-weight-bold " href=""> 
                    <i class="fas fa-hand-point-right    "></i>
                  </a>
                </div>
      
                <div class="col-12 col-md-6 text-center mt-5 slideanim order-md-1">
                  <div class="text-center m-auto w-50">
                      <img class=" w-100" src="img/images/source-code.svg" alt="">
                    <!-- <div class="position-relative h-100 text-center mr-auto ">
                      <img class=" img-responsive w-100 " src="img/learn.png" alt="">
                      <div class=" position-absolute w-100 first-animated h-100 text-center">
                        <div class="animated-div position-relative  w-100 text-center mx-auto ">
                          <a href="#" class="animated-div-child font-weight-bold">Start</a>
                            <button class="btn btn-lg btn-primary animated-div-child">Start</button>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
          </div>


        <!-- ***************SOURCE CODES PARTS ENDS RIGHT HERE*********** -->


        <!-- ***************PROJECTS PARTS STARTS RIGHT HERE*********** -->



                <div class="row mb-3">
                    <div class="col-12 col-md-6 text-center my-auto mt-5 slideanim order-md-2 ">
                        <h1>Questions & Answers</h1>
                        <p>
                          Get up to the questions and the answer session.
                          post up a source code or errors and get answers 
                          from senior/more experienced developers.
      
      
                        </p>
                        <a class="mx-5 w-50 btn btn-primary font-weight-bold " href=""> 
                          <i class="fas fa-hand-point-right    "></i>
                        </a>
                      </div>
      
                      <div class="col-12 col-md-6 text-center mt-5 slideanim order-md-2 ">
                        <div class="text-center m-auto w-50">
                            <img class=" w-100" src="img/images/questions.svg" alt="">
                          <!-- <div class="position-relative h-100 text-center mr-auto ">
                            <img class=" img-responsive w-100 " src="img/learn.png" alt="">
                            <div class=" position-absolute w-100 first-animated h-100 text-center">
                              <div class="animated-div position-relative  w-100 text-center mx-auto ">
                                <a href="#" class="animated-div-child font-weight-bold">Start</a>
                                 
                              </div>
                            </div>
                          </div> -->
                        </div>
                      </div>
                </div>


                <!-- ***************PROJECTS PARTS ENDS RIGHT HERE*********** -->


                <!-- ***************GET A MENTOR PARTS STARTS RIGHT HERE*********** -->




                <div class="row mb-3">
                    <div class="col-12 col-md-6 text-center my-auto mt-5 slideanim order-md-2">
                        <h1>Get a Mentor</h1>
                        <p>
                          Apply to get a mentor who will follow you up and 
                          ensure that you grow in your devepment life.
            
                        </p>
                        <a class="mx-5 w-50 btn btn-primary font-weight-bold " href=""> 
                          <i class="fas fa-hand-point-right    "></i>
                        </a>
                      </div>
            
                      <div class="col-12 col-md-6 text-center mt-5 slideanim order-md-1">
                        <div class="text-center m-auto w-50">
                            <img class=" w-100" src="img/images/teacher.svg" alt="">
                          <!-- <div class="position-relative h-100 text-center mr-auto ">
                            <img class=" img-responsive w-100 " src="img/learn.png" alt="">
                            <div class=" position-absolute w-100 first-animated h-100 text-center">
                              <div class="animated-div position-relative  w-100 text-center mx-auto ">
                                <a href="#" class="animated-div-child font-weight-bold">Start</a>
                               
                              </div>
                            </div>
                        </div> -->
                        </div>
                      </div>
                </div>
    
  
            <!-- ***************GET A MENTOR ENDS RIGHT HERE*********** -->


            <!-- ***************GET A TEAM PARTS STARTS RIGHT HERE*********** -->

            <div class="row mb-3">
                <div class="col-12 col-md-6 text-center my-auto mt-5 slideanim order-md-1">
                    <h1>Get a Team</h1>
                    <p>
                      Create or Join a team of other programmers in building 
                      Products.
        
                    </p>
                    <a class="mx-5 w-50 btn btn-primary font-weight-bold " href=""> 
                      <i class="fas fa-hand-point-right    "></i>
                    </a>
                  </div>
        
                  <div class="col-12 col-md-6 text-center mt-5 slideanim order-md-2">
                    <div class="text-center m-auto w-50">
                      <img class=" w-100" src="img/images/work-together.svg" alt="">
                      <!-- <div class="position-relative h-100 text-center mr-auto ">
                        <img class=" img-responsive w-100 " src="img/images/work-together.svg" alt="">
                        <div class=" position-absolute w-100 first-animated h-100 text-center">
                          <div class="animated-div position-relative  w-100 text-center mx-auto ">
                            <a href="#" class="animated-div-child font-weight-bold">Start</a>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
            </div>




          <!-- ***************GET A TEAM PARTS ENDS RIGHT HERE*********** -->



           <!-- ***************CHALLENGES PARTS STARTS RIGHT HERE*********** -->



           <div class="row mb-3">
              <div class="col-12 col-md-6 text-center my-auto mt-5 slideanim order-md-2">
                  <h1>challenges</h1>
                  <p>
                    Be part of the code war. Join the Code challenge for better 
                    and smartness in codes implemetation.
      
                  </p>
                  <a class="mx-5 w-50 btn btn-primary font-weight-bold " href=""> 
                    <i class="fas fa-hand-point-right    "></i>
                  </a>
                </div>
      
                <div class="col-12 col-md-6 text-center mt-5 slideanim order-md-1">
                  <div class="text-center m-auto w-50">
                      <img class=" w-100" src="img/images/to-do.svg" alt="">
                    <!-- <div class="position-relative h-100 text-center mr-auto ">
                      <img class=" img-responsive w-100 " src="img/learn.png" alt="">
                      <div class=" position-absolute w-100 first-animated h-100 text-center">
                        <div class="animated-div position-relative  w-100 text-center mx-auto ">
                          <a href="#" class="animated-div-child font-weight-bold">Start</a>
                            
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
           </div>
  

          <!-- ***************PROJECTS PARTS ENDS RIGHT HERE*********** -->


          <!-- ***************MARKET PARTS STARTS RIGHT HERE*********** -->




          <div class="row mb-3">
              <div class="col-12 col-md-6 text-center my-auto mt-5 slideanim order-md-1">
                  <h1>Market</h1>
                  <p>
                    Got a product to sell or want to buy software product?
                    checkout our market place to buy and sell applications
      
                  </p>
                  <a class="mx-5 w-50 btn btn-primary font-weight-bold " href=""> 
                    <i class="fas fa-hand-point-right    "></i>
                  </a>
                </div>
      
                <div class="col-12 col-md-6 text-center mt-5 slideanim order-md-2">
                  <div class="text-center m-auto w-50">
                    <div class="position-relative h-100 text-center mr-auto ">
                      <img class=" img-responsive w-100 " src="img/market.png" alt="">
                      <div class=" position-absolute w-100 first-animated h-100 text-center">
                        <div class="animated-div position-relative  w-100 text-center mx-auto ">
                          <a href="#" class="animated-div-child font-weight-bold">Start</a>
                            <!-- <button class="btn btn-lg btn-primary animated-div-child">Start</button> -->
                        </div>
                      </div>
                  </div>
                  </div>
                </div>
          </div>
  

          <!-- ***************MARKET PARTS ENDS RIGHT HERE*********** -->


           <!-- ***************ANNOUNCEMENT PARTS STARTS RIGHT HERE*********** -->



           <div class="row mb-3">
              <div class="col-12 col-md-6 text-center my-auto mt-5 slideanim order-md-2">
                  <h1>Announcement</h1>
                  <p>
                    Visit the announcement page for more informations and 
                    more job postings.
      
                  </p>
                  <a class="mx-5 w-50 btn btn-primary font-weight-bold " href=""> 
                    <i class="fas fa-hand-point-right    "></i>
                  </a>
                </div>
      
                <div class="col-12 col-md-6 text-center mt-5 slideanim order-md-1">
                  <div class="text-center m-auto w-50">
                      <img class=" w-100" src="img/images/announcement.svg" alt="">
                    <!-- <div class="position-relative h-100 text-center mr-auto ">
                      <img class=" img-responsive w-100 " src="img/learn.png" alt="">
                      <div class=" position-absolute w-100 first-animated h-100 text-center">
                        <div class="animated-div position-relative  w-100 text-center mx-auto ">
                          <a href="#" class="animated-div-child font-weight-bold">Start</a>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
           </div>
  

          <!-- ***************ANNOUNCEMENTPARTS ENDS RIGHT HERE*********** -->


           <!-- ***************HELP PARTS STARTS RIGHT HERE*********** -->



           <div class="row mb-3">
              <div class="col-12 col-md-6 text-center my-auto mt-5 slideanim order-md-1">
                  <h1>Help</h1>
                  <p>
                    Got questions? here is a big and great community to get help from
                    and what ever it is in tech related field.
                    
      
                  </p>
                  <a class="mx-5 w-50 btn btn-primary font-weight-bold " href=""> 
                    <i class="fas fa-hand-point-right    "></i>
                  </a>
                </div>
      
                <div class="col-12 col-md-6 text-center mt-5 slideanim order-md-2">
                  <div class="text-center m-auto w-50">
                      <img class=" w-100" src="img/images/question.svg" alt="">
                    <!-- <div class="position-relative h-100 text-center mr-auto ">
                      <img class=" img-responsive w-100 " src="img/help.jpg" alt="">
                      <div class=" position-absolute w-100 first-animated h-100 text-center">
                        <div class="animated-div position-relative  w-100 text-center mx-auto ">
                          <a href="#" class="animated-div-child font-weight-bold">Start</a>
                            
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
           </div>
  

          <!-- ***************HELP PARTS ENDS RIGHT HERE*********** -->
          


          </div>

        </div>

      </div>




      <!-- //FOR THE RIGHT SIDE -->
      <div class="col-md-2 d-none d-md-block">

        <div>
            <p>curious about how you can sell your apps?</p>
            <a href="#">start selling here</a>
        </div>
        <div>
            <p>get your skills to the next level by working with other programmers in teams</p>
            <a href="#">join a team here</a>
        </div>

      </div>
    </div>
    </div>

    <footer>
      <div class="footer">
        <div class="row">
          <div class="col-12 col-md-4">


            <nav>
              <ul>
                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Privacy & Policy</a></li>
                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Help</a></li>
                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Questions & Answers</a></li>
                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Suggestion</a></li>
                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Market Place</a></li>
                <li> <i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Our Products</a> </li>
              </ul>
            </nav>


          </div>
          <div class="divider"></div>
          <div class="col-12 col-md-4 text-center">
            <h3>Follow Us On</h3>
            <ul class="socials-links">
              <li>
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
              </li>
              <li>
                <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                  <a href="#">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
            </ul>
          </div>
          <div class="col-12 col-md-4">
            <p>since &copy; 2019</p>
          </div>
        </div>
      </div>
    </footer>



@include('portions.scripts')
</body>
</html>