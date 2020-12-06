@extends('layouts.Backend.master')
@section('title', 'Dashboard')
    @push('pageCSS')
        <link href="{{ asset('Backend/assets/css/select2.min.css') }}" rel="stylesheet" />
    @endpush
    @push('css')
        <style>
            .mce-branding {
                display: none !important;
            }

        </style>
    @endpush
@section('content')

    <div class="card">
        <div class="card-content">
            <div class="card-body">
            <form action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="post">Post Title</label>
                                <input type="text" name="title" class="form-control" value="{{old('title')}}"id="post">
                                @error('title')
                                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                @error('Description')
                                     <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                @enderror
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea name="Description" rows="25"  class="form-control my-editor">{{old('Description')}}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <img src="{{asset('Backend/assets/img/featured.jpg')}}" id="image" width="100%" alt="">
                            <div class="form-group">
                                <label for="img">Featured Image</label>
                                <input type="file" name="image" class="form-control" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" id="img">
                                @error('image')
                                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="img">Select Category</label>
                                <select class="select2 form-control" name="category[]" multiple="multiple">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="img">Select Publish Category</label>
                                <select class="form-control" name="postPublishedCategory">
                                        <option value="post" >Post</option>
                                        <option  value="featuredPost" selected="selected" >Featured Post</option>
                                        <option value="notice">Notice</option>
                                </select>
                                @error('category')
                                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="img">Meta Description , Meta Description Helps to Increase post google</label>
                                <textarea  name="meta" id="" class="form-control" rows="5">{{old('metaDescription')}}</textarea>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" checked name="published" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Publish
                                </label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('pageJs')


@endpush
@push('js')
    <script src="{{ asset('Backend/assets/js/select2.min.js') }}"></script>
{{--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>--}}
    {{--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>--}}
<script src="https://cdn.tiny.cloud/1/4v9qs4xphj2l9euoe90il4igrk2idwti1xps8h6zac4svef4/tinymce/5/tinymce.min.js"></script>
    <script>
        console.log('top');
        var editor_config = {
            path_absolute: "/",
            selector: "textarea.my-editor",
            relative_urls: false,
            plugins: [
                "advlist textcolor autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | forecolor backcolor |  alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            file_picker_callback : function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                        url : cmsURL,
                        title : 'Filemanager',
                        width : x * 0.8,
                        height : y * 0.8,
                        resizable : "yes",
                        close_previous : "no",
                        onMessage: (api, message) => {
                        callback(message.content);
            }
            });
            }
        };

        tinymce.init(editor_config);

    </script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: 'Select Category'
            });
        });

    </script>
@endpush
