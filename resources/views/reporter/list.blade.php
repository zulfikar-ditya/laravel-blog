@extends('reporter.base')

@section('default-title', '- List Post')

@section('default-content')
    <div class="contaiher bg-white shadow p-5 mb-5 text-capitalize" style="margin-top: 70px">
        <h2 class="text-center" style="letter-spacing: 10px">list Post</h2>
        <hr class="text-center border-info w-50">
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>Success Add data</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if (Session::has('success-update'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>Success update data</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if (Session::has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span>Success delete data</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row my-3">
            <div class="col-md">
                <a href="{{route('reporter-add-post')}}" class="btn btn-outline-danger">Add <i class="fas fa-plus"></i></a>
            </div>
            <div class="col-md">
                <form action="" method="get" class="form-inline">
                    <label for="" class="mr-3">Filter: </label>
                    <select name="filter" id="" class="form-control mr-3">
                        <option value="" selected>----------</option>
                        @foreach ($category as $item)
                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-outline-info">Go <i class="fas fa-external-link-alt"></i></button>
                </form>
            </div>
        </div>
        @if ($search != '')
        <div class="my-4">
            <h5>Search: {{$search}}</h5>
        </div>
        @endif
        @if ($filter != '')
            <h5>Filter: {{$filter['name']}}</h5>
        @endif
        <div class="table-responsice table-striped">
            <table class="table">
                <thead class="bg-navy">
                    <th>ID</th>
                    <th>title</th>
                    <th>image</th>
                    <th>image source</th>
                    <th>category</th>
                    <th>view</th>
                    <th>created at</th>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th>{{$item->id}}</th>
                        <td><a href="{{ route('reporter-edit-post', ['id' => $item['id'] ]) }}">{{$item->title}}</a></td>
                        <td><a href="{{ asset($item->image) }}" target="_blank"><span class="mr-2">Go</span><i class="fas fa-external-link-alt"></i></a></td>
                        <td>{{$item->image_source}}</td>
                        <td>{{$item->GetCategory['name']}}</td>
                        <td>{{$item->viewer}}</td>
                        <td>{{$item->created_at->format('Y-m-d')}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
        {{$data->links()}}
    </div>    
@endsection