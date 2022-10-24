@extends('layouts.app')

@section('content')
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <span class="fw-bold">Well Done!</span> {{ Session::get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<form method="POST" action="{{ route('brands.store') }}">
    @csrf
    Name:
    <input type="text" name="name"></br>
    Code:
    <input type="text" name="code"></br>
    Status:
    <input type="text" name="status"></br>
    <button>Save</button>
    <a href="{{ route('brands.index') }}">Back</a>
</form>

@endsection