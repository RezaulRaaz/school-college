@extends('layouts.Backend.master')
@section('title','Posts')
@push('pageCSS')
<link rel="stylesheet" type="text/css" href="{{asset('Backend/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endpush
@push('css')

@endpush
@section('content')
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                      <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Posts</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration" id="userTable" >
                                                <thead  >
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Writer</th>
                                                        <th>Post Status</th>
                                                        <th>Is Published</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                @foreach ($posts as $key=>$post)
                                                <tr>
                                                <th scope="row">{{$key+1}}</th>
                                                <td>{{$post->post_title}}</td>
                                                  <td>{{$post->user->name}}</td>
                                                  <td>

                                                      @if($post->post_status==1) <a href="#" class="badge badge-success text-white">Aproved</a>
                                                      @elseif($post->post_status==2)<a href="#" class="badge badge-primary text-white">Pending</a>
                                                      @elseif($post->post_status==3)<a href="#" class="badge badge-danger text-white">Cancel</a>
                                                      @else
                                                      <a href="#" class="btn btn-sm btn-danger text-white">Cancel</a>
                                                      @endif

                                                  </td>
                                                  <td>@if($post->post_publish=='on') <a href="#" class="btn btn-sm btn-primary text-white">Published</a>@else<a href="#" class="btn btn-sm btn-danger text-white">Not Published</a> @endif</td>
                                                  <td>
                                                      <a href="{{route('admin.post.edit',$post->id)}}"class="badge badge-success badge-md "><i class="fa fa-pencil"></i></a>
                                                      <a href="#" class="badge badge-primary badge-md "><i class="fa fa-eye"></i></a>
                                                  <a href="{{route('admin.post.delete',$post->id)}}" class="badge badge-danger badge-md">x</a>
                                                  </td>
                                                </tr>

                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('pageJs')
<script src="{{asset('Backend/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('Backend/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
@endpush
@push('js')
<script src="{{asset('Backend/app-assets/js/scripts/datatables/datatable.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.zero-configuration').DataTable();
   });

    function delete(id) {
        console.log('ok')
    }

</script>
@endpush
