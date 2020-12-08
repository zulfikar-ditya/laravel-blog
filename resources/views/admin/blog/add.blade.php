@extends('admin.base')

@section('default-title', '- Article - Add')

@section('default-content')
    <div class="container bg-white shadow p-5" style="margin-top: 70px">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="text-center" style="letter-spacing: 10px">Add Post</h2>
                <hr class="border-info">
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
                <form action="" method="post" class="text-capitalize" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="" class="form-control" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="">image <span class="text-danger">*</span></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" accept="image/*" required>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Image source <span class="text-danger">*</span></label>
                        <input type="text" name="image_source" id="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">category <span class="text-danger">*</span></label>
                        <select name="category" id="" class="form-control" required>
                            <option value="" selected>-----------</option>
                            @foreach ($category as $item)
                            <option value="{{$item['id']}}">{{$item['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">content <span class="text-danger">*</span></label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control" required><p>Hello world</p></textarea>
                        <small class="text-danger form-text">Use this <a href="https://code.visualstudio.com/" target="_blank" rel="noopener noreferrer"> text editor</a> or <a href="https://www.sublimetext.com/" target="_blank" rel="noopener noreferrer">This</a> or <a href="https://atom.io/" target="_blank" rel="noopener noreferrer">this</a></small>
                    </div>
                    <hr class="border-info">
                    <div class="row justify-content-around">
                        <input type="submit" value="Add" name="add" class="btn btn-outline-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection