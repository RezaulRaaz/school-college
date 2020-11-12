@extends('layouts.Backend.master')
@section('title','Add New Subject')
@push('pageCSS')

@endpush
@push('css')

@endpush
@section('content')
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5">
                <form action="{{route('admin.subject.store')}}" method="post"  >
                        @csrf
                        <div class="form-group">
                            <label for="name">Subject Name</label>
                            <input type="text" class="form-control" name="subject_name" id="name" >
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                          <div class="form-group">
                            <label for="subject">Select Subject Category</label>
                            <select class="form-control" name="category_subject" id="subject">
                                @foreach($category_subject as $sub)
                                    <option value="{{ $sub->id }}">{{$sub->category_subject_name}}</option>
                                @endforeach
                            </select>
                         </div>
                         <input type="submit" value="Add" class="btn btn-primary">
                    </form>
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
