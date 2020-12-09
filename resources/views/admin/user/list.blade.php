@extends('admin.base')

@section('default-title', '- User - List')

@section('default-content')
<div class="container text-capitalize bg-white shadow p-5" style="margin-top: 70px">
  <h2 class="text-center" style="letter-spacing: 10px">User List</h2>
  <hr class="text-center border-info w-50">
    @if (Session::has('add-success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="lead">Success Add Data</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    @if (Session::has('update-success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="lead">Success Update Data</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    @if (Session::has('update-password-success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="lead">Success Update password</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    @if (Session::has('delete-success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="lead">Success Delete data</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    <div class="row my-3">
        <div class="col-2">
            <a href="{{ route('admin-user-add') }}" class="btn btn-outline-danger">Add <i class="fas fa-plus"></i></a>
        </div>
        <div class="col-10">
            <form action="" method="get" class="form-inline">
                <label for="" class="mr-1 p">Filter: </label>
                <select name="filter" id="" class="form-control mr-3" required>
                    <option value="" selected>---------------</option>
                    <option value="1">Superuser</option>
                    <option value="2">Staff</option>
                    <option value="3">reporter</option>
                    <option value="4">user</option>
                </select>
                <button type="submit" class="btn btn-outline-info">Go <i class="fas fa-external-link-alt"></i></button>
            </form>
        </div>
    </div>
    @if ($searchValue != '')
    <div class="my-4">
        <h5>search: {{$searchValue}}</h5>
    </div>
    @endif
    @if ($filter != '')
    <div class="my-4">
        <h5>filter: {{$filter}}</h5>
    </div>
    @endif
    <div class="table-responsive table-striped">
        <table class="table">
            <thead class="bg-navy">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <td><a href="{{ route('admin-user-edit', ['id' => $item->id]) }}">{{$item->name}}</a></td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->phonenumber}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $data->links() }}
</div>    
@endsection