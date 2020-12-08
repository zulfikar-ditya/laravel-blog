@extends('welcome')

@section('title', '- Category')

@section('content')
<div class="container my-5">

    @if ($search)
    <div class="my-3">
        <h2 class="text-center">Search: {{$search}}</h2>
    </div>
    @endif

    <div class="mb-3">
        <form action="" method="get">
            <div class="row form-inline">
                <div class="col-5">
                    <input type="search" name="search" id="" class="form-control" placeholder="Search Categories">
                    <input type="submit" value="Search" class="btn btn-outline-info">
                </div>
            </div>
        </form>
    </div>
    @if ($search)
    @else
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true">All</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                aria-controls="pills-profile" aria-selected="false">Trending</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                aria-controls="pills-contact" aria-selected="false">New</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row justify-content-center text-capitalize">
                @foreach ($data as $item)
                <div class="col-md-4 mb-3">
                    <a href="{{route('PostByCategory', ['id' => $item['id'] ] )}}" class="text-dark">
                        <div class="card">
                            <img src="{{asset($item['image'])}}" alt="" class="card-img-top" height="250px">
                            <div class="card-body">
                                <h5 class="card-title">{{$item['name']}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row justify-content-center text-capitalize">
                @foreach ($data as $item)
                @if ($item['is_trending'] == true)
                <div class="col-md-4 mb-3">
                    <a href="{{route('PostByCategory', ['id' => $item['id'] ] )}}" class="text-dark">
                        <div class="card">
                            <img src="{{asset($item['image'])}}" alt="" class="card-img-top" height="250px">
                            <div class="card-body">
                                <h5 class="card-title">{{$item['name']}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row justify-content-center text-capitalize">
                @foreach ($data as $item)
                @if ($item['is_new'] == true)
                <div class="col-md-4 mb-3">
                    <a href="{{route('PostByCategory', ['id' => $item['id'] ] )}}" class="text-dark">
                        <div class="card">
                            <img src="{{asset($item['image'])}}" alt="" class="card-img-top" height="250px">
                            <div class="card-body">
                                <h5 class="card-title">{{$item['name']}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <span>{{$data->links()}}</span>
</div>
@endsection
