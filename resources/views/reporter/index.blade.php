@extends('reporter.base')

@section('default-content')

<div class="container bg-white shadow mb-5 p-5" style="margin-top: 70px">
    <div class="row justify-content-center">
        <div class="col-md-3 bg-fuchsia rounded shadow text-center p-4">
            <i class="fas fa-eye fa-2x"></i>
            <div class="my-3">
                <p class="lead">Viewer</p>
                <p class="font-weight-normal">{{$view}}</p>
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
                <th>viewer</th>
                <th>created at</th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <td><a href="{{ route('reporter-edit-post', ['id' => $item['id'] ]) }}">{{$item->title}}</a></td>
                    <td><a href="{{ asset($item->image) }}" target="_blank"><span class="mr-2">Go</span><i
                                class="fas fa-external-link-alt"></i></a></td>
                    <td>{{$item->image_source}}</td>
                    <td>{{$item->GetCategory['name']}}</td>
                    <td>{{$item->viewer}}</td>
                    <td>{{$item->created_at->format('Y-m-d')}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
