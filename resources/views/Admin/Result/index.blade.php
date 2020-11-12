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
                    <label for="img">Select Category</label>
                    <select class="select2 form-control" name="Institute">
                        @foreach ($instutes as $instute)
                            <option value="{{ $instute->id }}">{{ $instute->name .'( '.$instute->Website_college_code.' )'}} </option>
                        @endforeach
                    </select>
                    @error('category')
                     <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
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
@endpush
