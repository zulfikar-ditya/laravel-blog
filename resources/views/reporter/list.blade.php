@extends('reporter.base')

@section('default-title', '- List Post')

@section('default-content')
    <div class="contaiher bg-white shadow p-5 mb-5 text-capitalize">
        @if (Session::has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span>Success Add data</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <div class="table-responsice tablr-striped">
            <table class="table">
                <thead class="bg-navy">
                    <th>id</th>
                    <th>title</th>
                    <th>image</th>
                    <th>image source</th>
                    <th>category</th>
                    <th>view</th>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th>{{$item->id}}</th>
                        <td>{{$item->title}}</td>
                        <td><a href="{{ asset($item->image) }}" target="_blank">image</a></td>
                        <td>{{$item->category}}</td>
                        <td>{{$item->viewer}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
    </div>    
@endsection