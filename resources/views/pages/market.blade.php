@extends('pages.layout')


@push('styles')


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
    .bg-div img {
      height: 250px;
    }
    .buy-sell {
      overflow: hidden;
      margin-top: -3em;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .col-5 .shadow p {
      min-height: 100px;
    }
  </style>
@endpush

@section('contents')
    <div class="row block-container text-center mx-auto">
      <div class="bg-div w-100 h-50 pt-0 ">
        <img class="w-100 " src="img/background/buy-sell.jpeg" alt="">
      </div>
      <div class="buy-sell w-75 bg-light shadow mx-auto">
        <div class="row bg-light ">
          <div class="col-5 mx-auto">
            <div class="card shadow bg-light m-3">
                <p class="mt-2">Sell Your Apps here with ease</p>

                

                <a class="btn btn-primary" href="#">
                  <i class="fa fa-sellsy" aria-hidden="true"></i>
                  Sell
                </a>
            </div>

          </div>
          <div class="col-5 mx-auto">
            <div class="card shadow bg-light m-3">
              <p class="mt-2">Get a ready made app for the cheapest price </p>

              <a class="btn btn-primary" href="{{ route('products.index') }}">
                <i class="fa fa-buysellads" aria-hidden="true"></i>
                Buy
              </a>
            </div>
          </div>
        </div>
      </div>


              



    </div>


@endsection