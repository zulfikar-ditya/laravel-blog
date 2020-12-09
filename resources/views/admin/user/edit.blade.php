@extends('admin.base')

@section('default-title', '- User - Change - '.ucwords($data['name']))

@section('default-content')
<div class="container bg-white shadow p-5" style="margin-top: 70px">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true">Edit</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                aria-controls="pills-profile" aria-selected="false">Change Password</a>
        </li>
        @if (Auth::user()->hasRole('superuser'))
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                aria-controls="pills-contact" aria-selected="false">Delete</a>
        </li>
        @endif
    </ul>
</div>
<div class="tab-content" id="pills-tabContent">

    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="container mb-5 bg-white shadow p-5" style="margin-top: 70px">
            <div class="row justify-content-center text-capitalize">
                <div class="col-md-7 ">
                    @if($errors -> any())
                    @foreach ($errors->all() as $item)
                    <div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
                        <span>{{ $item }}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endforeach
                    @endif
                    <h2 class="text-center" style="letter-spacing: 10px">Edit User</h2>

                    <hr class="border-info">

                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" value="{{$data['name']}}" id="" class="form-control" required
                                autofocus>
                        </div>

                        <div class="form-group">
                            <label for="">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" value="{{$data['email']}}" id="" class="form-control"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="">Address <span class="text-danger">*</span></label>
                            <textarea name="address" id="" cols="30" rows="5" class="form-control" maxlength="150"
                                required>{{$data['address']}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">phone number <span class="text-danger">*</span></label>
                            <input type="number" name="phonenumber" value="{{$data['phonenumber']}}" id=""
                                class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Role <span class="text-danger">*</span></label>
                            <select name="role" id="" class="form-control" required>
                                <option value="" selected>---------</option>
                                @if (Auth::user()->hasRole('superuser'))
                                <option value="1">Superuser</option>
                                <option value="2">Staff</option>
                                @endif
                                <option value="3">Reporter</option>
                                <option value="4">User</option>
                            </select>
                            <small class="form-text text-danger">Select Again</small>
                        </div>

                        <hr class="border-info">

                        <div class="row justify-content-center">
                            <input type="submit" value="Save" name="save" class="btn btn-outline-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="container bg-white shadow mb-5 p-4 text-capitalize" style="margin-top: 70px">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    @if (Session::has('password-wrong'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span>password wrong</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if (Session::has('password-not-match'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p class="lead">password not match</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <h2 class="text-center" style="letter-spacing: 10px">Change Password</h2>
                    <hr class="border-info">
                    <form action="" method="post">
                        @csrf
                        @if (Auth::user()->hasRole('staff'))
                        <div class="form-group">
                            <label for="">Previous password <span class="text-danger">*</span></label>
                            <input type="password" name="PrevPass" id="" class="form-control" required>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="">New Password <span class="text-danger">*</span></label>
                            <input type="password" name="newPass" id="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" name="confirmPass" id="" class="form-control" required>
                        </div>
                        <hr class="border-info">
                        <div class="row justify-content-center">
                            <input type="submit" value="Save" name="savePassword" class="btn btn-outline-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (Auth::user()->hasRole('superuser'))
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="container mb-5 p-5 bg-white shadow" style="margin-top: 70px">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 style="letter-spacing: 10px">Delete</h2>
                    <hr class="border-info">
                    <a href="{{ route('admin-user-delete', ['id' => $data['id']]) }}"
                        class="btn btn-outline-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@endsection
