@extends('layouts.Backend.master')
@section('title','Dashboard')
@push('pageCSS')

@endpush
@push('css')

@endpush
@section('content')
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Post Title</th>
                            <th scope="col">Writter</th>
                            <th scope="col">Post Status</th>
                            <th scope="col">Is Published</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                          <tr>
                            <th scope="row">1</th>
                          <td>{{$post->post_title}}</td>
                            <td>{{$post->user->name}}</td>
                            <td>

                                @if($post->post_status==1) <a href="#" class="btn btn-sm btn-success text-white">Aproved</a>
                                @elseif($post->post_status==2)<a href="#" class="btn btn-sm btn-primary text-white">Pending</a>
                                @elseif($post->post_status==3)<a href="#" class="btn btn-sm btn-danger text-white">Cancel</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger text-white">Cancel</a>
                                @endif

                            </td>
                            <td>@if($post->post_publish=='on') <a href="#" class="btn btn-sm btn-primary text-white">Published</a>@else<a href="#" class="btn btn-sm btn-danger text-white">Not Published</a> @endif</td>
                            <td>
                                <a href="{{route('admin.post.edit',$post->id)}}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                            <a href="{{route('admin.post.delete',$post->id)}}" class="btn btn-sm btn-danger">x</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('pageJs')

@endpush
@push('js')

@endpush
