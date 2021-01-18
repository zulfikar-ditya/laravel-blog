@extends('reporter.base')

@section('default-title', '- Article - Edit Category')

@section('default-content')
    <div class="container p-5 bg-white shadow text-capitalize" style="margin-top: 70px">
        <div class="text-center">
            <h2 style="letter-spacing: 10px">Select Category</h2>
            <hr class="border-info w-50">
            <h5>For Post: {{$blog['title']}}</h5>
            @if ($search)
                <h4>search: {{$search}}</h4>
                <h5>result: {{$dataCount}}</h5>
            @endif
        </div>
        <div class="row justify-content-center">
            @foreach ($data as $item)
            <div class="col-md-4">
                <form action="" method="post">
                    @csrf
                    <div class="card">
                        {{-- <img src="{{asset($item['image'])}}" alt="{{$item['name']}}" class="img-card-top img-fluid" style="height: 250px"> --}}
                        <div class="card-body">
                            <h5 class="card-title text-dark" style="font-size: 20px">{{$item['name']}}</h5>
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
                            <div class="row justify-content-center mt-2">
                                <input type="hidden" name="category" value="{{$item['id']}}">
                                <input type="submit" value="Choose This One" class="btn btn-outline-success" onclick="submitConfirm()">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @endforeach
        </div>
        <span>
            {{$data->links()}}
        </span>
    </div>
    <script>
        function submitConfirm() {
            alert('Are you Sure Want To Use This Item?');
            if(confirm) {
                this.form.submit();
            }
        }
    </script>
@endsection