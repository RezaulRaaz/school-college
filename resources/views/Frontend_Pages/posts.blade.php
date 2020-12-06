@extends('layouts.Frontend.master')
@section('tite', 'school-college-Posts')
@push('css')
    <style>
        .card-text img{
            display: none;
        }
    </style>
@endpush
@section('content')
            <section>
                <div class="p-school">
                    <div class="container">
                        <div class="p-school-content">
                            <h3 class="text-center pb-5">All Posts</h3>
                            <div class="row row-cols-1 row-cols-md-3">
                                @foreach($posts as $post)
                                    {{--@dd($post)--}}
                                    <div class="col mb-4">
                                        <div class="card h-100">
                                            <img src="{{postImg($post->post_image)}}" height="200" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <a href="{{route('single.post',[$post->post_slug,$post->id])}}" class="text-dark"><h5 class="card-title font-weight-bold">{{$post->post_title}}</h5></a>
                                                <p class="card-text"> {!! postExcerpt($post->post_description) !!}....</p>
                                            </div>
                                        </div>
                                    </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
@push('js')
@endpush
