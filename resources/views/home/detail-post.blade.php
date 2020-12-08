@extends('welcome')

@section('title', '- Post - '.ucwords($data['title']))

@section('content')
<div class="container my-4">
    <h2 class="text-capitalize">{{$data['title']}}</h2>
    <span class="lead">{{$data['created_at']->format('H:m  d-m-Y')}}</span>
    <p class="text-muted">{{$data->GetReporter['name']}}</p>
    <img src="{{asset($data['image'])}}" alt="{{$data['title']}}" class="img-fluid mt-3">
    <small class="text-secondary">image from: {{$data['image_source']}}</small>
    {{-- content --}}
    <span class="text-justify">
        {!! $data['content'] !!}
    </span>
    {{-- content --}}
</div>
<div class="container my-5">
    <div class="row">
        <div class="col bg-danger" style="height: 10px"></div>
        <div class="col bg-dark" style="height: 10px"></div>
        <div class="col bg-warning" style="height: 10px"></div>
        <div class="col bg-primary" style="height: 10px"></div>
    </div>
    <div class="row justify-content-around text-capitalize">
        @foreach ($relatedPost as $item)
        <div class="col-md-12 my-3">
    
            <a href="{{route('PostDetail', ['id' => $item['id']])}}">
                <div class="card">
                    <div class="d-flex" style="flex: 1 1 auto">
    
                        <img class="img-thumbnail" src="{{asset($item['image'])}}" alt="Card image cap" height="200px" width="300px">
    
                        <div class="card-body p-3">
                            <h5 class="card-title text-uppercase text-dark">{{$item['title']}}</h5>
                            <hr>
                            <span class="text-muted">{{$item['created_at']->format('H:m d-m-Y')}}</span>
                        </div>
    
                    </div>
                </div>
            </a>
    
        </div>
        @endforeach
    </div>
</div>
@endsection
