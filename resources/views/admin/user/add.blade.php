@extends('admin.base')

@section('default-title', ' - User - Add')

@section('default-content')
    <div class="container mb-5 text-capitalize bg-white shadow p-5 rounded">
        <div class="row justify-content-center">
            <div class="col-md-7">
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
            @if (Session::has('add-success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="lead">Success Add Data</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            @if (Session::has('password-not-match'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="lead">Password Not Match</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <h2 class="text-center" style="letter-spacing: 10px">Add User</h2>
                <hr class="border-primary">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="" class="form-control" autofocus required max="255">
                    </div>

                    <div class="form-group">
                        <label for="">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Address <span class="text-danger">*</span></label>
                        <textarea name="address" id="" cols="30" rows="5" class="form-control" maxlength="150" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Phone Number<span class="text-danger">*</span></label>
                        <input type="number" name="phonenumber" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">confirm Password <span class="text-danger">*</span></label>
                        <input type="password" name="Confirmpassword" id="" class="form-control" required>
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
                    </div>

                    <hr class="border-primary">

                    <div class="row justify-content-center">
                        <input type="submit" value="Add" name="add" class="btn btn-outline-success mr-3">
                        <input type="submit" value="Add And Add Another" name="AddAndAddAnother" class="btn btn-outline-info">
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection