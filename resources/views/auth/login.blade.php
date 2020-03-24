
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="">
    <meta name="author" content=""> -->

    <title>Sign in | {{ config('App.Name', 'CeEmstack')}}</title>

    <!-- Bootstrap core CSS -->
    @include('portions.styles')

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
       
            <style>
                .form-signin .d-md-block img {
                    height: 433px !important;
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
                        <h1 class="">Hi! Welcome back</h1>
                    </div>
                    
                  </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <form class=" my-auto bg-light p-3" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                        <div class="form-label-group ">
                        <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                         <label for="email">{{ __('E-Mail Address') }}</label>

                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror


                        </div>
                  
                        <div class="form-label-group">
                          <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                          <label for="password">Password</label>

                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                            @enderror
                        </div>

                        <div class="checkbox mb-3">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          <label for="remember">
                        
                            {{ __('Remember Me') }}
                        </label>
                        </div>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                        </a>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                        {{ __('Login') }}
                        </button>
                        <p class="mt-5 mb-3 text-muted">&copy; CeEmstack</p>
                      </form>
                </div>
              </div>
            </div>
       </div>




        <!-- FOR THE BOOTSTRAP 4 -->
    @include('portions.scripts')
  </body>
</html>
