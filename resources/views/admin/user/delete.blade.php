@extends('admin.base')

@section('default-title', '- User - Delete')

@section('default-content')
    <div class="container bg-white shadow p-5">
        <p class="lead">Name: {{$data['name']}}</p>
        <div class="row my-3">
            <form action="" method="post">
                @csrf
                <input type="submit" value="Delete" class="btn btn-outline-danger mr-3">
            </form>
            <a href="{{ route('admin-user-edit', ['id' => $data['id']]) }}" class="btn btn-outline-info">Cancel</a>
        </div>
    </div>
@endsection