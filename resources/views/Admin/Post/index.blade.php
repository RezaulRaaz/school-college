@extends('layouts.Backend.master')
@section('title','Dashboard')
@push('pageCSS')
@endpush
@push('css')
    <style>
        .mce-branding{
            display:none!important;
        }
    </style>
@endpush
@section('content')

<div class="card">
    <div class="card-content">
        <div class="card-body">
         <div class="row ml-2">
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="post">Post Title</label>
                    <input type="text" class="form-control" id="post">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea name="content" rows="20"  class="form-control my-editor"></textarea>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="img">Featured Image</label>
                    <input type="file" class="form-control" id="img">
                </div>
                <div class="form-group">
                    <label for="inputState">Select Category</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Publish
                    </label>
                  </div>

            </div>
         </div>
        </div>
    </div>
</div>

@endsection

@push('pageJs')


@endpush
@push('js')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    var editor_config = {
      path_absolute : "/",
      selector: "textarea.my-editor",
      plugins: [
        "advlist textcolor autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | forecolor backcolor |  alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };

    tinymce.init(editor_config);
  </script>
@endpush
