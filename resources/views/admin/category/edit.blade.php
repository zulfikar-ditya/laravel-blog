@extends('admin.base')

@section('default-title', '- Category - Edit')

@section('default-content')
    <div class="container bg-white shadow mb-5 p-5" style="margin-top: 70px">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="text-center" style="letter-spacing: 10px">Edit Categpry</h2>
                <hr class="border-info">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{$data['name']}}" id="" class="form-control" required autofocus>
                    </div>
                    <div class="form-row justify-content-around">
                        <div class="form-group">
                            <label for="">New <span class="text-danger">*</span></label>
                            <select name="new" id="" class="form-control" required>
                                <option value="" selected>-------</option>
                                <option value="1">True</option>
                                <option value="0">False</option>
                            </select>
                            <small class="form-text text-danger">Select Again</small>
                        </div>
                        <div class="form-group">
                            <label for="">Trending <span class="text-danger">*</span></label>
                            <select name="trending" id="" class="form-control" required>
                                <option value="" selected>-------</option>
                                <option value="1">True</option>
                                <option value="0">False</option>
                            </select>
                            <small class="form-text text-danger">Select Again</small>
                        </div>
                        <div class="form-group">
                            <label for="">Auto Update <span class="text-danger">*</span></label>
                            <select name="autoUpdate" id="" class="form-control" required>
                                <option value="" selected>-------</option>
                                <option value="1">True</option>
                                <option value="0">False</option>
                            </select>
                            <small class="form-text text-danger">Select Again</small>
                        </div>
                    </div>
                    <div class="form-row justify-content-center ">
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <label for="">Image <span class="text-danger">*</span></label>
                                <input type="file" name="image" class="custom-file-input" id="validatedInputGroupCustomFile"
                                    accept="image/*">
                                <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                            </div>
                        </div>
                    </div>
                    <p class="form-text"><a href="{{ asset($data->image) }}" target="_blank">Image</a></p>
                    <hr class="border-info">
                    <div class="row justify-content-center">
                        <input type="submit" value="Save" name="add" class="btn btn-outline-info">
                    </div>
                </form> 
            </div>
        </div>
    </div>
@endsection