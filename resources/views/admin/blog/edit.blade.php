@extends('admin.base')

@section('default-title', '- Article - Edit - '.ucwords($data ['title']))

@section('default-content')
<div class="container bg-white shadow p-5 mb-5" style="margin-top: 70px">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true">Edit</a>
        </li>
        @if ($data ['status'] == 1)
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-deactive" role="tab"
                aria-controls="pills-profile" aria-selected="false">Hide</a>
        </li>
        @else
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-reactive" role="tab"
                aria-controls="pills-profile" aria-selected="false">Un Hide</a>
        </li>
        @endif
        @if (Auth::user()->hasRole('superuser'))
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                aria-controls="pills-profile" aria-selected="false">Delete</a>
        </li>
        @endif
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                aria-controls="pills-contact" aria-selected="false">View</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h2 class="text-center" style="letter-spacing: 10px">Edit Post</h2>
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
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" value="{{ $data ['title'] }}" id="" class="form-control"
                                required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">image <span class="text-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="customFile"
                                    accept="image/*">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <small><a href="{{asset($data ['image'])}}" class="form-text"
                                        target="_blank">Image</a></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">image source <span class="text-danger">*</span></label>
                            <input type="text" name="image_source" value="{{$data ['image_source']}}" id=""
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">category <span class="text-danger">*</span></label>
                            <select name="category" id="" class="form-control" required>
                                <option value="" selected>--------</option>
                                @foreach ($category as $item)
                                @if ($data->category == $item['id'])
                                <option value="{{$item['id']}}" selected>{{$item['name']}}</option>
                                @else
                                <option value="{{$item['id']}}">{{$item['name']}}</option>
                                @endif
                                @endforeach
                            </select>
                            <small class="text-danger">Select again</small>
                        </div>
                        <div class="form-group">
                            <label for="">Content <span class="text-danger">*</span></label>
                            <textarea name="content" id="" cols="30" rows="10" class="form-control"
                                required>{{$data ['content']}}</textarea>
                            <small class="text-danger form-text">
                                Use this 
                                <a href="https://code.visualstudio.com/"target="_blank" rel="noopener noreferrer"> text editor</a>
                                or 
                                <a href="https://www.sublimetext.com/" target="_blank" rel="noopener noreferrer">This</a> or <a href="https://atom.io/" target="_blank" rel="noopener noreferrer">this</a>
                            </small>
                        </div>
                        <hr class="border-info">
                        <div class="row justify-content-center">
                            <input type="submit" value="Save" class="btn btn-outline-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if ($data ['status'] == 1)
        <div class="tab-pane fade" id="pills-deactive" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 style="letter-spacing: 10px">Hide Post</h2>
                    <hr class="border-info">
                    <a href="{{route('admin-blog-hide', ['id' => $data ['id']])}}" class="btn btn-outline-danger">Hide</a>
                </div>
            </div>
        </div>
        @else
        <div class="tab-pane fade" id="pills-reactive" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 style="letter-spacing: 10px">Un Hide Post</h2>
                    <hr class="border-info">
                    <a href="{{route('admin-blog-unhide', ['id' => $data ['id']])}}" class="btn btn-outline-success">Un Hide</a>
                </div>
            </div>
        </div>
        @endif
        @if (Auth::user()->hasRole('superuser'))
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 style="letter-spacing: 10px">Delete Post</h2>
                        <hr class="border-info">
                        <a href="{{route('admin-blog-delete', ['id' => $data ['id']])}}" class="btn btn-outline-danger">Delete</a>
                    </div>
                </div>
            </div>
        @endif
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <h2 class="text-center">View</h2>
            <hr class="border-info text-center w-75">
            {{-- preview --}}
            <div class="container">
                <h2 class="text-capitalize">{{$data ['title']}}</h2>
                <span class="lead">{{$data ['created_at']->format('H:m  d-m-Y')}}</span>
                <p class="text-muted">{{$data ->GetReporter['name']}}</p>
                <img src="{{asset($data ['image'])}}" alt="{{$data ['title']}}" class="img-fluid mt-3">
                {{-- content --}}
                <span>
                    {!! $data ['content'] !!}
                </span>
                {{-- content --}}
            </div>
            {{-- preview --}}
        </div>
    </div>
</div>
@endsection
