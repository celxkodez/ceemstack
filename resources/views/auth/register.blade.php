

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register | CeEmstack</title>

    <!-- MAIN STYLES  -->
    @include('portions.styles')


    
        <style>
            .form-signin .d-md-block img {
                height: 478px !important;
            }
        </style>
 



  </head>
  <body class="text-center">
       <div class="signin-page">
          <div class="form-signin">
              <div class="row">
                <div class="col-md-6 d-md-block d-none position-relative">
                  
                  <img src="img/background/code.jpeg" alt="">
                  <div class="position-absolute sign-in-img">
                    <div class="overlay">
                        <h1 class="">CeEmstack</h1>
                        <h4 class=" font-weight-bold">
                          Share, Network, Learn, Grow and Sale your software products.
                        </h4>
                    </div>
                    
                  </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <form class=" my-auto bg-light p-3" method="POST" action="{{ route('register') }}">
                       @csrf
                        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
                        <div class="form-label-group ">
                            
                            <input id="name" placeholder="Full Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>  
                            @enderror

                            <label for="name">Full Name</label>
                        </div>
                        
                        <div class="form-label-group ">
                            <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                        
                         
                          <label for="email">Email address</label>
                        </div>      

                        <div class="form-label-group">
                            
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                            <label for="password">Password</label>                       
                        </div>

                        <div class="form-label-group">
                            
                            <input type="password" name="password_confirmation" id="password-confirm"  class="form-control" placeholder="Confirm Password"  required >
                            <label for="password-confirm">Confirm Password</label>
                        </div>

                        <!-- <div class="form-label-group">
                          <input type="password"  name="confpassword"  id="confirm-pa-ssword" class="form-control" placeholder="Confirm Password" required>
                          <label for="confirm-pa-ssword">Confirm Password</label>
                        </div> -->
                        <!-- <div class="checkbox mb-3">
                          <label>
                            <input type="checkbox" value="remember-me"> Remember me
                          </label>
                        </div> -->
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                        <p class="mt-5 mb-3 text-muted">&copy; CeEmstack2019</p>
                      </form>
                </div>
              </div>
            </div>
       </div>




        <!-- FOR THE BOOTSTRAP 4 -->
    @include('portions.scripts')
  </body>
</html>




