@extends('layouts.Backend.master')
@section('title','Users')
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
                                    <h4 class="card-title">Users List</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration" id="userTable" >
                                                <thead>
                                                    <tr>
                                                        <th>Total</th>
                                                        <th>Picture</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>User Type</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $key=>$user)
                                                    <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{$user->avatar}}</td>
                                                      <td>{{$user->name}}</td>
                                                      <td>{{$user->email}}
                                                        @if(!empty($user->email_verified_at)) <a href="#" title="email varified" > <i class="fa fa-check-circle"></i></a>
                                                        @else
                                                        <a href="#" class="text-danger" title="email not varified" ><i class="fa fa-times-circle"></i></a>
                                                        @endif

                                                    </td>
                                                      <td>{{$user->phone}}</td>
                                                      <td></td>
                                                      <td>
                                                          <a href="{{route('admin.user.edit',$user->id)}}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                                          <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                                      <a href="{{route('admin.user.delete',$user->id)}}" class="btn btn-sm btn-danger">x</a>
                                                      </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </tfoot>
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

</script>
@endpush
