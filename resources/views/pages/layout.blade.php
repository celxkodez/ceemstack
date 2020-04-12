<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>CeEmstack</title>
  @include('portions.styles')

  @stack('styles')

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

          <!-- <div class="row block-container"> -->
            @yield('contents')
          <!-- </div> -->

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