@extends('reporter.base')

@section('default-title', '- Add Article - Select Category')


@section('content')
    <div class="container bg-white p-5 shadow text-capitalize" style="margin-top: 70px">
        <div class="text-center">
            <h2 style="letter-spacing: 10px">Select Category</h2>
            <hr class="border-info w-50">
            @if ($search)
                <h4>search: {{$search}}</h4>
                <h5>result: {{$dataCount}}</h5>
            @endif
        </div>
        <div class="row justify-content-center">
            @foreach ($data as $item)
            <div class="col-md-4">
                <a href="{{ route('reporter-add-post', ['id' => $item['id']] ) }}">
                    <div class="card">
                        <img src="{{asset($item['image'])}}" alt="{{$item['name']}}" class="img-card-top img-fluid" style="height: 250px">
                        <div class="card-body">
                            <h5 class="card-title">{{$item['name']}}</h5>
                        </div>
                        <div class="card-footer p-3">
                            <div class="row justify-content-around">
                                @if ($item['is_new'])
                                <i class="fas fa-fire fa-2x bg-danger p-2 rounded"></i>
                                @endif
                                @if ($item['is_trending'])
                                <i class="fas fa-chart-line fa-2x bg-success p-2 rounded"></i>
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <span>
            {{$data->links()}}
        </span>
    </div>
@endsection