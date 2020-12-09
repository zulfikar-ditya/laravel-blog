<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Blog @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }

    </style>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">

</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container p-1">
            <a class="navbar-brand text-danger" href="{{route('index')}}">
                <i class="fab fa-laravel fa-2x"></i>
            </a>
            <a class="navbar-brand" href="{{route('index')}}">Laravel Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto text-capitalize">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('category')}}">Category</a>
                    </li>
                    @if (Auth::user())
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{Auth::User()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>
                          @if (Auth::user()->hasRole('superuser|staff'))
                          <a class="dropdown-item" href="{{route('adminIndex')}}">admin</a>
                          @endif
                          @if (Auth::user()->hasRole('reporter'))
                          <a class="dropdown-item" href="{{route('ReporterIndex')}}">reporter</a>
                          @endif

                          <form action="{{route('logout')}}" method="post" class="dropdown-item">
                              @csrf
                              <button type="submit" class="btn btn-outline-danger">logout <i class="fas fa-sign-out-alt"></i></button>
                          </form>

                        </div>
                      </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('login')}}">Login <i class="fas fa-sign-in-alt"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('register')}}">Register <i class="fas fa-user-edit"></i></a>
                    </li>
                    @endif
                </ul>
                <form class="form-inline my-2 my-lg-0" method="GET" action="{{route('index')}}">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search Articles" aria-label="Search">
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- content --}}
    @yield('content')
    {{-- content --}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
