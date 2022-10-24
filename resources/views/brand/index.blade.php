@extends('layouts.app')

@section('content')
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <span class="fw-bold">Well Done!</span> {{ Session::get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>code</th>
        <th>status</th>
        <th>action</th>
    </tr>
    @foreach ($list as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->code}}</td>
        <td>{{$data->status}}</td>
        <td>
            <a href="{{ route('brands.edit',$data->id) }}">edit</a>
            <a href="{{ route('brands.destroy',$data->id) }}">delete</a>
        </td>
    </tr>
    @endforeach


</table>
<a href="{{ route('brands.create') }}">Create</a>
@endsection