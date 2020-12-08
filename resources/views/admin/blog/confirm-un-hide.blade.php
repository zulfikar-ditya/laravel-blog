@extends('admin.base')

@section('default-title', '- Article - un Hide Article')


@section('default-content')
    <div class="container bg-white shadow p-5" style="margin-top: 70px">
        <p class="lead text-capitalize">Title: {{$data['title']}}</p>
        <div class="row my-3">
            <form action="" method="post" class="mr-3">
                @csrf
                <input type="submit" value="Un Hide" class="btn btn-outline-success">
            </form>
            <a href="{{route('admin-blog-edit', ['id' => $data['id']])}}" class="btn btn-outline-danger">Cancel</a>
        </div>
    </div>    
@endsection