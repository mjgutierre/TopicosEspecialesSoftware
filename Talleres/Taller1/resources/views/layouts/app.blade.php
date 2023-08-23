@include('layouts.header')

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
  <header class="masthead bg-primary text-white text-center py-3">
    <div class="container d-flex align-items-center flex-column">
      <h2>@yield('subtitle', 'Rocket Store')</h2>
    </div>
  </header>
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
    <!-- footer -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script> -->
</body>

</html>