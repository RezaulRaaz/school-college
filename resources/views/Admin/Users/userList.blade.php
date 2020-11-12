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
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>User Status</th>
                                                        <th>User Role</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($users as $key=>$user)
                                                    @if (!($user->id == Auth::User()->id))
                                                        <tr>
                                                            <th scope="row">{{$key+1}}</th>
                                                            <td>{{$user->name}}</td>
                                                            <td>{{$user->email}}
                                                                @if(!empty($user->email_verified_at)) <a href="#" title="email varified" > <i class="fa fa-check-circle"></i></a>
                                                                @else
                                                                <a href="#" class="text-danger" title="email not varified" ><i class="fa fa-times-circle"></i></a>
                                                                @endif

                                                            </td>
                                                            <td>{{$user->phone}}</td>
                                                            <td>
                                                                <div class="custom-control custom-switch custom-switch-danger switch-md mr-2 mb-1">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch{{$user->id}}">
                                                                    <label class="custom-control-label" for="customSwitch{{$user->id}}">
                                                                        <span class="switch-text-left">Block</span>
                                                                        <span class="switch-text-right">Active</span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                @if($user->role->id==1)
                                                                    <a href="#" class="badge badge-dark badge-md text-white" title="Admin" ><i class="fa fa-user-circle-o"></i></a>
                                                                @elseif($user->role->id==2)
                                                                    <a href="#" class="badge badge-dark badge-md text-white" title="Instute" ><i class="fa fa-university"></i></a>
                                                                @elseif($user->role->id==3)
                                                                     <a href="#" class="badge badge-dark badge-md text-white" title="Student" ><i class="fa fa-graduation-cap"></i></a>
                                                                @else
                                                                    ''
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="{{route('admin.user.edit',$user->id)}}" class="badge badge-success badge-md "><i class="fa fa-pencil"></i></a>
                                                                <a href="#" class="badge badge-primary badge-md " title="User Details Show"><i class="fa fa-eye"></i></a>
                                                            <a href="{{route('admin.user.delete',$user->id)}}" title="Delete" class="badge badge-danger badge-md ">x</a>
                                                            </td>
                                                        </tr>
                                                    @endif

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
