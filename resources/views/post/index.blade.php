@extends('layouts.auth-layout.app')


@section('contents')
    @foreach( $posts as $post)
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-lg-8 col-md-11 ml-5 col-sm-11 col-xs-11"> -->
                
                    <div class="col-lg-9 select2-drop-auto-width col-md-9 col-sm-12 col-xs-12">

                        <div class="well well-lg">
                            <a href="" class=" mCS-dark" style="color: #444;">
                                <div class="header">
                                    <H1>{{ $post->post_title }} </H1>
                                </div>
                            </a>
                            <a class=" back-link" style="color: #444;" href="">
                                <div class="section">
                                    <!-- <p> -->
                                        {{ $post->post_body }}
                                    <!-- </p> -->
                                </div>
                            </a>
                            <div class=" img-stack">
                                <img src="img/blog-details/1.jpg" alt="">

                            </div>
                            <div class="well">
                                <div class="row">
                                    <div class="col-lg-6 floatleft alignleft">
                                        <span>0</span>
                                        <i class="fa fa-comment-o" aria-hidden="true"></i>
                                    </div>


                                    <div class="col-lg-6 floatright alignright text-right">
                                            <!-- <span class=""></span> -->
                                            <p>psoted by:</p>
                                            <p>User name Here</p>
                                            <!-- <div class="">posted by:</div>
                                            <div class="">User name Here</div> -->
                                            <!-- <span class="block inline-block">User name Here</span> -->
                                    </div>
                                </div>
                                

                                
                            </div>
                        </div>
                    </div>
                
                <!-- </div> -->
            </div>
        </div>
    @endforeach

 



@endsection