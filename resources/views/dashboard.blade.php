@extends('welcome')

@section('title', '| Dahsboard')

@section('content')
    <div class="container p-5">
        <div class="row justify-content-center p-4">
            <div class="col-md-5">

                <div class="text-center">
                    <h1>My Account</h1>
                    <hr class="border-info">
                </div>

                <div class="d-flex mx-3">
                    <i class="far fa-user fa-2x mr-3"></i>
                    <p class="align-self-center">{{Auth::User()->name}}</p>
                </div>

                <div class="d-flex mx-3">
                    <i class="far fa-envelope fa-2x mr-3"></i>
                    <p class="align-self-center">{{Auth::User()->email}}</p>
                </div>

                <div class="d-flex mx-3">
                    <i class="fas fa-phone fa-2x mr-3"></i>
                    <p class="align-self-center">{{Auth::User()->phonenumber}}</p>
                </div>
                <hr class="border-info">
                <div class="row justify-content-center">
                    <a href="{{route('profile.show')}}" class="btn btn-outline-info"><span class="mr-2">Edit</span> <i class="fas fa-user-edit"></i></a>
                </div>

            </div>
        </div>
    </div>
@endsection