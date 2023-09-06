<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Online Rocket Store')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto  ml-auto">
                    <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
                    <a class="nav-link active" href="{{ route('auth.login') }}">Login</a>
                    <a class="nav-link active" href="{{ route('auth.signup') }}">Signup</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- header -->

    <div class="container h-100">
        <div class="mt-5">
            @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
            @endif

            @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>

        <div class="container my-5 content-container">
            <div class="overlay"></div>
            @yield('content')
        </div>


        <!-- footer -->
        <div class="copyright py-3 text-center text-white">
            <div class="container">
                <small>
                    Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://github.com/mjgutierre">
                        Maria Jose Gutierrez Estrada
                    </a>
                </small>
            </div>
        </div>
</body>

</html>