@extends('admin.base')

@section('default-title', '- Category - List')

@section('default-content')
<div class="container mb-5 bg-white shadow p-5 text-capitalize" style="margin-top: 70px">
    <h2 class="text-center" style="letter-spacing: 10px">Categories List</h2>
    <hr class="text-center border-info w-50">
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="lead">Success Add Data</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if (Session::has('update-success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="lead">Success update Data</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row my-3">
        <div class="col-2">
            <a href="{{ route('admin-category-add') }}" class="btn btn-outline-danger">Add <i
                    class="fas fa-plus"></i></a>
        </div>
        <div class="col-10">
            <form action="" method="get" class="form-inline text-capitalize">
                <label for="" class="mr-2">Filter <span class="text-danger">*</span> </label>
                <select name="filter" id="" class="form-control mr-2">
                    <option value="" selected>-------</option>
                    <option value="NewTrue">New True</option>
                    <option value="NewFalse">New False</option>
                    <option value="TrendingTrue">Trending True</option>
                    <option value="TrendingFalse">Trending False</option>
                    <option value="AutoUpdateTrue">Auto Update True</option>
                    <option value="AutoUpdateFalse">Auto Update False</option>
                </select>
                <button type="submit" class="btn btn-outline-info">Go <i class="fas fa-external-link-alt"></i></button>
            </form>
        </div>
    </div>
    @if ($query != '')
    <div class="my-4 text-capitalize">
        <h5>search: {{$query}}</h5>
    </div>
    @endif
    @if ($filter != '')
    <div class="my-4 text-capitalize">
        <h5>filter: {{$filter}}</h5>
    </div>
    @endif
    <div class="table-responsive table-striped text-capitalize">
        <table class="table">
            <thead class="bg-navy">
                <th>Id</th>
                <th>name</th>
                <th>new</th>
                <th>Trending</th>
                <th>auto update</th>
                <th>User</th>
                <td>Image</td>
            </thead>
            <tbody>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <td><a href="{{ route('admin-category-edit', ['id' => $item->id]) }}">{{$item->name}}</a></td>
                    @if ($item->is_new == 1)
                    <td class="text-success"><i class="far fa-check-circle"></i></td>
                    @else
                    <td class="text-danger"><i class="fas fa-times"></i></td>
                    @endif
                    @if ($item->is_trending == 1)
                    <td class="text-success"><i class="far fa-check-circle"></i></td>
                    @else
                    <td class="text-danger"><i class="fas fa-times"></i></td>
                    @endif
                    @if ($item->is_auto_update == 1)
                    <td class="text-success"><i class="far fa-check-circle"></i></td>
                    @else
                    <td class="text-danger"><i class="fas fa-times"></i></td>
                    @endif
                    <td>{{$item->user}}</td>
                    <td><a href="{{ asset($item->image) }}" target="_blank"><span class="mr-2">Go</span><i
                                class="fas fa-external-link-alt"></i></a></td>
                </tr>
                @endforeach
            </tbody>
            </tbody>
        </table>
    </div>
    {{$data->links()}}
</div>
@endsection
