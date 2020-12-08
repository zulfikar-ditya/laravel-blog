@extends('welcome')

@section('title', 'Post - Category - '.ucwords($category['name']))

@section('content')
<div class="container my-3 text-capitalize">
    <div class="my-3">
        <h3 class="text-center">Category: {{$category['name']}}</h3>
    </div>
    <div class="row justify-content-around text-capitalize">
        @foreach ($blog as $item)
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
    <span>{{$blog->links()}}</span>
</div>
@endsection