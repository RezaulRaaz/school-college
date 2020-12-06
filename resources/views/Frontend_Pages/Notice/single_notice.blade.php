@extends('layouts.Frontend.master')
@section('title','Notice')
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
                    <div class="row row-cols-1 mt-1 row-cols-md-3">
                        <div class="col-lg-9 p-5">
                            <div class="s-post-title mb-3">
                                <h2>{{$notice->post_title}}</h2>
                            </div>
                            <div class="s-post-img text-center">
                                <img class="w-100" src="{{postImg($notice->post_image)}}" alt="">
                            </div>
                            <div class="s-post-description mt-3">
                                {!! $notice->post_description !!}
                            </div>
                        </div>
                        <div class="col-lg-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
@endpush
