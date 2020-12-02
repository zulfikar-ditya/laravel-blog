@extends('admin.base')

@section('default-content')
<div class="container my-3">

    <div class="row justify-content-around align-items-center text-center text-capitalize">

        <div class="col-md-3 bg-maroon p-4 rounded shadow mb-5">
            <i class="fas fa-users fa-2x"></i>
            <div class="mt-3">
                <p class="lead">Users</p>
                <ul class="list-group border-none shadow">
                    <a href="{{ route('admin-user-add') }}">
                        <li class="list-group-item bg-maroon">
                            <span class="mr-1">Add </span> <i class="fas fa-user-plus"></i>
                        </li>
                    </a>
                    <a href="{{ route('admin-user-list') }}">
                        <li class="list-group-item bg-maroon">
                            <span class="mr-1">List </span> <i class="fas fa-list"></i>
                        </li>
                    </a>
                </ul>
            </div>
        </div>

        <div class="col-md-3 bg-olive p-4 rounded shadow mb-5">
            <i class="far fa-list-alt fa-2x"></i>
            <div class="mt-3">
                <p class="lead">categories</p>
                <ul class="list-group border-none shadow">
                    <a href="{{ route('admin-category-add') }}">
                        <li class="list-group-item bg-olive">
                            <span class="mr-1">Add </span> <i class="fa fa-plus-square"></i>
                        </li>
                    </a>
                    <a href="{{ route('admin-category-list') }}">
                        <li class="list-group-item bg-olive">
                            <span class="mr-1">List </span> <i class="fas fa-list"></i>
                        </li>
                    </a>
                </ul>
            </div>
        </div>

        <div class="col-md-3 bg-indigo p-4 rounded shadow mb-5">
            <i class="far fa-newspaper fa-2x"></i>
            <div class="mt-3">
                <p class="lead">Articles</p>
                <ul class="list-group border-none shadow">
                    <a href="">
                        <li class="list-group-item bg-indigo">
                            <span class="mr-1">Add </span> <i class="fa fa-plus-square"></i>
                        </li>
                    </a>
                    <a href="">
                        <li class="list-group-item bg-indigo">
                            <span class="mr-1">List </span> <i class="fas fa-list"></i>
                        </li>
                    </a>
                </ul>
            </div>
        </div>

    </div>

</div>
@endsection
