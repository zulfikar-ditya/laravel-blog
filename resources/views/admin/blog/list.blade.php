@extends('admin.base')

@section('default-title', '- Article - List')

@section('default-content')
    <div class="container bg-white shadow p-5" style="margin-top: 70px">
        <h2 class="text-center" style="letter-spacing: 10px">List Article</h2>
        <hr class="border-info w-50 text-center">
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
            <span>Success Update data</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        @if (Session::has('hide-success'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span>Success Hide Data</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        @if (Session::has('un-hide-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>Success Un Hide Data</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        @if (Session::has('delete'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>Success delete data</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <div class="row my-3">
            <div class="col-2">
                <a href="{{route('admin-blog-add')}}" class="btn btn-outline-danger">Add <i class="fas fa-plus"></i></a>
            </div>
            <div class="col">
                <form action="" method="get" class="form-inline">
                    <div class="form-inline">
                        <label for="" class="mr-3">Status </label>
                        <select name="filterStatus" id="" class="form-control mr-3">
                            <option value="" selected>---------</option>
                            <option value="StatusTrue">True</option>
                            <option value="StatusFalse">False</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-info">Go <i class="fas fa-external-link-alt"></i></button>
                </form>
            </div>
            <div class="col">
                <form action="" method="get">
                    <div class="form-inline">
                        <label for="" class="mr-3">Filter Category: </label>
                        <select name="filterCategory" id="" class="form-control mr-3">
                            <option value="" selected>------</option>
                            @foreach ($category as $item)
                                <option value="{{$item['id']}}">{{$item['name']}}</option>
                            @endforeach
                            <option value=""></option>
                        </select>
                        <button type="submit" class="btn btn-outline-info">Go <i class="fas fa-external-link-alt"></i></button>
                    </div>
                </form>
            </div>
        </div>
        @if ($filter != '')
        <div class="my-3 text-capitalize">
            <h5>filter Status: {{$filter}}</h5>
        </div>
        @endif
        @if ($search)
            <div class="my-3 text-capitalize">
                <h5>Search: {{$search}}</h5>
            </div>
        @endif
        @if ($categoryFilter)
            <div class="my-3 text-capitalize">
                <h5>category: {{$categoryFilter['name']}}</h5>
            </div>
        @endif
        <div class="table-responsive table-striped">
            <table class="table">
                <thead class="bg-navy text-uppercase">
                    <th>ID</th>
                    <th>Title</th>
                    <th>image</th>
                    <th>image source</th>
                    <th>category</th>
                    <th>user</th>
                    <th>status</th>
                    <th>view</th>
                    <th>created at</th>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th>{{$item->id}}</th>
                        <td><a href="{{route('admin-blog-edit', ['id' => $item['id']])}}">{{$item->title}}</a></td>
                        <td><a href="{{ asset($item->image) }}" target="_blank">Go<i class="fas fa-external-link-alt"></i></a></td>
                        <td>{{$item->image_source}}</td>
                        <td>{{$item->GetCategory['name']}}</td>
                        <td>{{$item->GetReporter['name']}}</td>
                        @if ($item->status == 1)
                        <td class="text-success"><i class="far fa-check-circle"></i></td>
                        @else
                        <td class="text-danger"><i class="fas fa-times"></i></td>    
                        @endif
                        <td>{{$item->viewer}}</td>
                        <td>{{$item->created_at->format('H:m d-m-Y')}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$data->links()}}
    </div>
@endsection