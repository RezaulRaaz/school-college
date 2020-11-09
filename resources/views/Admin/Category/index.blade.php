@extends('layouts.Backend.master')
@section('title','Category')
@push('pageCSS')

@endpush
@push('css')

@endpush
@section('content')
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <div class="row">
              <div class="col-lg-4">
              <form action="{{route('admin.category.store')}}" method="post" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name </label>
                    <input type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
              </div>
              <div class="col-lg-6">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $cate)
                      <tr>
                      <td>{{$cate->category}}</td>
                        <td>
                        <a href="{{route('admin.category.delete',$cate->id)}}" class="btn btn-sm btn-danger">x</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
              <div class="pagination-area d-flex justify-content-center">
                {{$category->links()}}
              </div>
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
