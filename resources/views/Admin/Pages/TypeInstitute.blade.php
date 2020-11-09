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
         <div class="row">
             <div class="col-lg-3">
             <form action="{{route('admin.primaryEntry.type.add')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="typeins">Type Of Institute</label>
                      <input required type="text" name="typename" class="form-control" placeholder="Name of Type" id="typeins" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
             </div>
             <div class="col-lg-6">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">S/L</th>
                        <th scope="col">Type Name</th>
                        <th scope="col">Actional</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($types as $key=>$type)
                      <tr>
                        <th>{{$key+1}}</th>
                        <th>{{$type->name}}</th>
                        <th>
                            <button type="button" class="btn btn-danger btn-sm">x</button>
                        </th>
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
