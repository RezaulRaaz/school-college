@extends('layouts.Backend.master')
@section('title','Markshet Add')
@push('pageCSS')
<link href="{{ asset('Backend/assets/css/select2.min.css') }}" rel="stylesheet" />
@endpush
@push('css')

@endpush
@section('content')
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <div class="row">
               <div class="col-lg-4">
                  <h3>Add New Markshet</h3>
                  <div class="form-group">
                    <label for="img">Select Institute</label>
                    <select class="select2 form-control" name="Institute">
                        @foreach ($instutes as $instute)
                            <option value="{{ $instute->id }}">{{ $instute->name .'( '.$instute->Website_college_code.' )'}} </option>
                        @endforeach
                    </select>
                    @error('Institute')
                     <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="img">Select Class</label>
                    <select class="select2 form-control" name="Institute">
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->class_name}}</option>
                        @endforeach
                    </select>
                    @error('Institute')
                     <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="yearPicker">Select Year</label>
                     <input class="form-control" type="month" id="yearPicker">
                 </div>
                 <div class="form-group">
                    <label for="yearPicker">Select Exam</label>
                    <select class="form-control" name="Institute">
                            <option value="">First Terminal Exam</option>
                            <option value="">Second Terminal Exam</option>
                            <option value="">Third Terminal Exam</option>
                            <option value="">Test Exam</option>
                    </select>
                 </div>
                 <div class="form-group">
                    <label for="yearPicker">Student Name</label>
                    <input type="text" class="form-control" placeholder="Student Name" >
                 </div>
                 <div class="form-group">
                    <label for="yearPicker">Student Roll</label>
                    <input type="text" class="form-control" placeholder="Student Roll Number" >
                 </div>
               </div>
               <div class="col-lg-6">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Subject Marks</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>
                            <input type="text" id="subject" class="form-control" placeholder="Name">
                        </td>
                        <td>
                            <input type="number" id="Marks" class="form-control" placeholder="Marks">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <input type="button" onclick="addmarks()" class="btn btn-primary float-right" id="addbutton" value="Add">
                  <br>
                  <table class="table table-hover table-striped text-center mt-4">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Marks</th>
                        <th scope="col">GPA</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>English</td>
                        <td>75</td>
                        <td>A</td>
                        <td>
                            <a href="#" class="badge badge-success badge-md text-center "><i class="fa fa-pencil"></i></a>
                            <a href="#" class="badge badge-danger badge-md text-center ">x</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Bangla</td>
                        <td>70</td>
                        <td>A</td>
                        <td>
                            <a href="#" class="badge badge-success badge-md text-center "><i class="fa fa-pencil"></i></a>
                            <a href="#" class="badge badge-danger badge-md text-center ">x</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Social Science</td>
                        <td>60</td>
                        <td>A-</td>
                        <td>
                            <a href="#" class="badge badge-success badge-md text-center "><i class="fa fa-pencil"></i></a>
                            <a href="#" class="badge badge-danger badge-md text-center ">x</a>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot class="table-success">
                        <th></th>
                        <th></th>
                        <th><h6 class="font-weight-bold" >Total Marks = 4.20 </h6></th>
                        <th ><h6 class="font-weight-bold">Total GPA = A </h6></th>
                        <th></th>
                    </tfoot>
                  </table>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('pageJs')
<script src="{{ asset('Backend/assets/js/select2.min.js') }}"></script>
@endpush
@push('js')
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: 'Select Category'
        });
    });

</script>
<script>
    // fetch('/admin/institute/get')
    // .then(response => response.json())
    // .then(data => console.log(data));

        let subject = document.getElementById('subject').value;
        let marks = document.getElementById('Marks').value;
        let addButton = document.getElementById('addbutton');
      
        const data = [
            'name' =>
        ];

        fetch('https://example.com/profile', {
        method: 'POST', // or 'PUT'
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
        })
        .then(response => response.json())
        .then(data => {
        console.log('Success:', data);
        })
        .catch((error) => {
        console.error('Error:', error);
        });
</script>
@endpush
