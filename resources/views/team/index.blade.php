@extends('layouts.auth-layout.app')


@section('contents')
<div class="text-center mg-tb-30">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-8 col-md-11 ml-5 col-sm-11 col-xs-11 center-block">
              <h1>Teams</h1>

              @if($team->count() > 0) 

              @else

                <div class="well">
                  <h1>Theres No Teams Yet</h1>
                </div>

              @endif
            </div>
        </div>
    </div>
</div>



@endsection