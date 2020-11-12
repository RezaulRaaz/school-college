@extends('layouts.Backend.master')
@section('title', 'New User')
    @push('pageCSS')

    @endpush
    @push('css')

    @endpush
@section('content')
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <h2>Add New User</h2>
            <form action="{{route('admin.new.user')}}" method="post" enctype="multipart/form-data" >
                @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">Profile Picture</label>
                                <input type="file" name="avatar" class="form-control" id="name">
                                @error('avatar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">User Name</label>
                                <input type="text" name="user_name" class="form-control" id="name">
                                @error('user_name')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror

                            </div>

                            <div class="form-group">
                                <label for="name">Designation</label>
                                <input type="text" name="designation" class="form-control" id="name">

                            </div>
                            <div class="form-group">
                                <label for="about">About</label>
                                <textarea class="form-control" name="about" id="about" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">Phone</label>
                                <input type="text" class="form-control" id="name">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" name="email" class="form-control" id="name">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Assign Role</label>
                                <select name="role" class="form-control">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Password</label>
                                <input type="password" name="password" class="form-control" id="name">
                                @error('password')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" name="varified" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Email Varified</label>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
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
