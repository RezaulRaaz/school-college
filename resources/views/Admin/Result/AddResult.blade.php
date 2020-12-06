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
        <addresult-component></addresult-component>
        </div>
    </div>
</div>
@endsection

@push('pageJs')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
