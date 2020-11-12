@extends('layouts.Backend.master')
@section('title','Dashboard')
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
                <div class="col-lg-6 ">
                <a href="{{route('admin.subject.add')}}" class="btn btn-primary">Add New Subject</a>
                    <div class="table-responsive">
                        <table class="table zero-configuration" id="userTable" >
                            <thead  >
                                <tr>
                                    <th>Name</th>
                                    <th>Suject Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bangla</td>
                                    <td>School</td>
                                </tr>
                                <tr>
                                    <td>Ict</td>
                                    <td>College</td>
                                </tr>
                                <tr>
                                    <td>English</td>
                                    <td>school</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
