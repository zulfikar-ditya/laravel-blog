@extends('reporter.base')

@section('default-title', 'Delete Confirm')

@section('default-content')
<div class="container bg-white shadow p-5 text-capitalize" style="margin-top: 70px">
    <p class="lead">Title: {{$data->title}}</p>
    <div class="row my-3">
        <form action="" method="post">
            @csrf
            <input type="submit" value="Delete" class="btn btn-outline-danger mr-3">
        </form>
        <a href="{{ route('reporter-edit-post', ['id' => $data['id']]) }}" class="btn btn-outline-info">Cancel</a>
    </div>
</div>    
@endsection