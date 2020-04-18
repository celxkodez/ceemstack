

@extends('layouts.auth-layout.app')

@push('styles')
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('app-css/dropzone/dropzone.css') }}">

  <style>
    .form-wrapper{
      margin-left: 1em;
    }
    .padtop-3 {
      padding-top: 3em;
    }
    .padbot-3 {
      padding-bottom: 3em;
    }
  
  </style>

@endpush

@push('scripts')
    <!-- dropzone JS
		============================================ -->
    <script src="{{ asset('app-js/dropzone/dropzone.js') }}"></script>

    <!-- additional dropzone configurations -->


      

    <script>
      Dropzone.options.upload = {
        url: "{{ route('products.store') }}",
        uploadMultiple: true,
        acceptedFiles: '.png, .svg, .jpg, .gif',
        autoProcessQueue: false,
        addRemoveLinks: true,
        init: function(){

          var upload = this;

          let submit = document.querySelector('#submit');
          // let submit = $('#submit');

          let form = document.querySelector('#upload');

          submit.addEventListener('click', (e)=>{
            e.preventDefault();
            upload.processQueue();
          });

          this.on('sending', function(file, xhr, formData){

            
            var data = form.querySelectorAll('input');
            console.log(data);
            data.forEach(function(key, el){
              formData.append(el.name, el.value);
            });
          });
          
         
        }

      };

      // let submit = document.querySelector('#submit');

      // submit.addEventListener('click', (e)=>{
      //   e.preventDefault();
      //   upload.processQueue();
      // });
   
   </script>
@endpush


@section('contents')


  <div class="text-center mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-11 ml-5 col-sm-11 col-xs-11">
              <div> 
                <h1>Post Your Product For Sale</h1>
              </div>
              <!-- class="mx-auto" -->
              <div class="m-5 text-left form-wrapper">
              <!-- <div class="dropzone-pro"> -->
                <form class="dropzone"  id="upload" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <input type="text" name="post_title" class="form-control" placeholder="Post Title">
                  </div>
                  <div class="form-group">

                  
                    <textarea placeholder="Write Your Post Here" class="form-control" id="ssummernote" name="post_body"></textarea>
                  </div>


                  <div class="file-upload-inner ts-forms form-group">
                    <!-- <label for=""> </label> -->
                      <div class="input prepend-big-btn">
                          <label class="icon-right" for="prepend-big-btn">
                              <i class="fa fa-download"></i>
                            </label>
                          <div class="file-button">
                              Browse
                              <input name="post_img" type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                          </div>
                          <input type="text" id="prepend-big-btn" placeholder="Attach a screenshot of your errors or code">
                      </div>

                      <!-- <input name="post_img" type="file" > -->
                  </div>

                  <div >

                    <div class="dz-message needsclick download-custom">
                        <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        <h2>Drop files here or click to upload.</h2>
                        <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                        </p>
                    </div>
                  </div>

                  



                

                
                  <button id="submit" type="submit" class="btn btn-primary pull-right">Post</button>
                </form>
              <!-- </div> -->

                
                
              </div>
            
            </div>
        </div>
    </div>
  </div>

@endsection