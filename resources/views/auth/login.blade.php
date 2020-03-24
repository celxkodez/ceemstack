{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

--}}


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign in | CeEmstack</title>

    <!-- Bootstrap core CSS -->
    @include('portions.styles')

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Custom styles for this template -->
    <!-- <link href="signin.css" rel="stylesheet"> -->
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
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                         <label for="email">{{ __('E-Mail Address') }}</label>

                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror


                        </div>
                  
                        <div class="form-label-group">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
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
--}}
