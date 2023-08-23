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
          <a class="nav-link active" href="{{ route('user.login') }}">Login</a>
          <a class="nav-link active" href="{{ route('user.signup') }}">Signup</a>
          <!-- <a class="nav-link active" href="{{ route('home.index') }}">Home</a> -->
          <a class="nav-link active" href="{{ route('user.show') }}">Profiles</a>
          <!-- <a class="nav-link active" href="{{ route('user.logout') }}">Logout</a> -->
        </div>
      </div>
    </div>
  </nav>
</body>

</html>