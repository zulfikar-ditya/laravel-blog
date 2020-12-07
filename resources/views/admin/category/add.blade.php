@extends('admin.base')

@section('default-title', '- Category - Add')

@section('default-content')
<div class="container mb-5 bg-white shadow p-5" style="margin-top: 70px">
    <div class="row justify-content-center">
        <div class="col-md-7 text-capitalize">
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
            @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="lead">Success Add Data</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <h2 class="text-center" style="letter-spacing: 10px">Add category</h2>
            <hr class="border-primary">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="" class="form-control" required autofocus>
                </div>
                <div class="form-row justify-content-around">
                    <div class="form-group">
                        <label for="">New <span class="text-danger">*</span></label>
                        <select name="new" id="" class="form-control" required>
                            <option value="" selected>-------</option>
                            <option value="1">True</option>
                            <option value="0">False</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Trending <span class="text-danger">*</span></label>
                        <select name="trending" id="" class="form-control" required>
                            <option value="" selected>-------</option>
                            <option value="1">True</option>
                            <option value="0">False</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Auto Update <span class="text-danger">*</span></label>
                        <select name="autoUpdate" id="" class="form-control" required>
                            <option value="" selected>-------</option>
                            <option value="1">True</option>
                            <option value="0">False</option>
                        </select>
                    </div>
                </div>
                <div class="form-row justify-content-center ">
                    <div class="input-group is-invalid">
                        <div class="custom-file">
                            <label for="">Image <span class="text-danger">*</span></label>
                            <input type="file" name="image" class="custom-file-input" id="validatedInputGroupCustomFile"
                                accept="image/*" required>
                            <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                        </div>
                    </div>
                </div>
                <hr class="border-info">
                <div class="row justify-content-center">
                    <input type="submit" value="Add" name="add" class="btn btn-outline-info mr-3">
                    <input type="submit" value="Add And Add Another" name="addAndAddAnother"
                        class="btn btn-outline-success">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
