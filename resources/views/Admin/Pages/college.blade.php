@extends('layouts.Backend.master')
@section('title','Type Of institute')
@push('pageCSS')

@endpush
@push('css')

@endpush
@section('content')
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <form action="{{route('admin.primaryEntry.college.add')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-lg-6">
                    <h3>Institute Info</h3>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name :</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email :</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mobile Number :</label>
                        <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Institute Types</label>
                        <select name="type_id" class="form-control" id="exampleFormControlSelect1">
                         @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                         @endforeach
                        </select>
                      </div>
                   <div class="form-group">
                          <label for="exampleFormControlFile1">Logo :</label>
                          <input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Address :</label>
                        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description :</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Start Year :</label>
                        <input type="text" name="Start_year" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
            </div>
                <div class="col-lg-6">
                        <h3>Institute Contact</h3>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Principal Name :</label>
                          <input type="text" name="p_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Principal Number :</label>
                            <input type="text" name="p_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Vice Principal Name :</label>
                            <input type="text" name="v_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Vice Principal Number :</label>
                            <input type="text" name="v_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">College Code :</label>
                            <input type="text" name="college_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Website :</label>
                            <input type="text" name="website" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Map :</label>
                            <textarea class="form-control" name="map" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
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

@endpush
