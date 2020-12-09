@extends('admin.base')

@section('default-title', '- Article - Delete - '.ucwords($data['title']))

@section('default-content')
    <div class="container bg-white shadow p-5 text-capitalize" style="margin-top: 70px">
        <p class="lead">This will delete permanenly</p>
        <p class="lead">title: {{$data['title']}}</p>
        <div class="row my-2">
            <form action="" method="post" class="mr-3">
                @csrf
                <input type="submit" value="Delete" class="btn btn-outline-danger">
            </form>
            <a href="route('admin-blog-edit', ['id' => $data['id'] ])" class="btn btn-outline-success">Cancel</a>
        </div>
    </div>
@endsection