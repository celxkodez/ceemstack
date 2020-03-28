@extends('layouts.auth-layout.app')

@push('styles')
  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">

  <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('app-css/modals.css') }}">
        <!-- codemirror CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('app-css/code-editor/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('app-css/code-editor/ambiance.css') }}">
  <style>
    .form-wrapper{
      margin-left: 1em;
    }

    /* .code-edit {
      
    } */

    .padtop-3 {
      padding-top: 3em;
    }
    .padbot-3 {
      padding-bottom: 3em;
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

        <!-- code editor JS
		============================================ -->
    <script src="{{ asset('app-js/code-editor/codemirror.js') }}"></script>
    <script src="{{ asset('app-js/code-editor/code-editor.js') }}"></script>
    <script src="{{ asset('app-js/code-editor/code-editor-active.js') }}"></script>

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

                  <div class="code-edit padtop-3 padbot-3 modal-area-button">
                    <label for="">Do you want to add codes??</label><br>

                    <!-- <button class="btn btn-primary" type="button"></button> -->
                    <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#codeEditor">
                      Use Code Editor
                    </a>



                  </div>
                  <div id="codeEditor" class="modal modal-edu-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                            <div class="modal-body">
                              <div class="code-editor-area mg-b-15">
                                <div class="container-fluid">
                                    <div class="row">
                                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                          <div class="code-editor-single responsive-mg-b-30">
                                              <h2>Code Editor Style One</h2>
                                              <textarea id="code1">
                                                  <script>
                                                      $(document).ready(function() {

                                                          var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
                                                              lineNumbers: true,
                                                              matchBrackets: true,
                                                              styleActiveLine: true,
                                                              theme: "ambiance"
                                                          });

                                                          var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
                                                              lineNumbers: true,
                                                              matchBrackets: true,
                                                              styleActiveLine: true
                                                          });

                                                      });
                                                  </script>
                                              </textarea>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                                <a data-dismiss="modal" href="#">Done</a>
                                
                            </div>
                        </div>
                    </div>
                  </div>
                  <!-- <div class="code-editor-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="code-editor-single responsive-mg-b-30">
                                  <h2>Code Editor Style One</h2>
                                  <textarea id="code1">
                                      <script>
                                          $(document).ready(function() {

                                              var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
                                                  lineNumbers: true,
                                                  matchBrackets: true,
                                                  styleActiveLine: true,
                                                  theme: "ambiance"
                                              });

                                              var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
                                                  lineNumbers: true,
                                                  matchBrackets: true,
                                                  styleActiveLine: true
                                              });

                                          });
                                      </script>
                                  </textarea>
                              </div>
                          </div>
                        </div>
                    </div>
                  </div> -->


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

@endsection