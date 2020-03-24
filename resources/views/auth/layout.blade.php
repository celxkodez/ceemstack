
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="">
    <meta name="author" content=""> -->

    <title>{{ config('App.Name', 'CeEmstack')}}</title>

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
                
                 @yield('content')
              </div>
            </div>
       </div>




        <!-- FOR THE BOOTSTRAP 4 -->
    @include('portions.scripts')
  </body>
</html>
