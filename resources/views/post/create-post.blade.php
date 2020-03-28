@extends('layouts.auth-layout.app')

@push('styles')
  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">

  <style>
    .form-wrapper{
      margin-left: 1em;
    }
  
  </style>

@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            });
    </script>

@endpush


@section('contents')


<div class="text-center mg-tb-30">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-8 col-md-11 ml-5 col-sm-11 col-xs-11">
            <div> 
             <h1>Create Post</h1>
            </div>
          
            <div class="m-5 text-left form-wrapper">
              <form class="mx-auto" method="post">
                <div class="form-group">
                  <input type="text" name="post_title" class="form-control" placeholder="Post Title">
                </div>
                <div class="form-group">

                
                  <textarea placeholder="Write Your Post Here" class="form-control" id="summernote" name="editordata"></textarea>
                </div>


                <div class="form-group p4">
                  <label for="category">Select Category:</label>

                  <select class="form-control" name="category" id="category">
                    <option value="select category">-- --</option>
                  </select>
                </div>

                <div class="form-group">
                  <h5>Choose Tags</h5>
                 
                  
                  <label class="checkbox-inline"><input type="checkbox" value="">css</label>
                  <label class="checkbox-inline"><input type="checkbox" value="">javascript</label>
                  <label class="checkbox-inline"><input type="checkbox" value="">html</label>
                </div>
              </form>

              <button type="submit" class="btn btn-primary pull-right">Post</button>
              
            </div>
          
          </div>
      </div>
  </div>
</div>

 <!-- <div> 
   <p>hi this placed is for creating post</p>
 </div>
 <div class="row">
   <div class="col-6 p5">
    <form method="post">
      <textarea id="summernote" name="editordata"></textarea>
    </form>

    
   </div>
 </div> -->

@endsection