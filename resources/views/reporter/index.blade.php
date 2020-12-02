@extends('reporter.base')

@section('default-content')

<div class="container bg-white shadow mb-5 p-5">
    <div class="row justify-content-center">
        <div class="col-md-3 bg-fuchsia rounded shadow text-center p-4">
            <i class="fas fa-eye fa-2x"></i>
            <div class="my-3">
                <p class="lead">Viewer</p>
                <p class="font-weight-normal">234</p>
            </div>
        </div>
    </div>
</div>

<div class="container bg-white shadow mb-5 p-5 text-capitalize">
    <h1 class="mb-3 text-center">newest post</h1>
    <div class="table-responsive table-striped">
        <table class="table">
            <thead class="bg-navy">
                <th>ID</th>
                <th>title</th>
                <th>image</th>
                <th>create at</th>
                <th>category</th>
            </thead>
            @for ($i = 0; $i < 5; $i++)
            <tr>
                <th>{{$i}}</th>
                <td>test</td>
                <td>image</td>
                <td>create at</td>
                <td>category</td>
            </tr>
            @endfor
        </table>
    </div>
</div>

@endsection