@include('layouts.header')
<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
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
<div class="container">
    <h1>{{ $viewData["title"] }}</h1>
    <ul class="user-list">
        @foreach($viewData["users"] as $user)
        <li class="user-item">
            {{ $user->name }} - {{ $user->email }}
            <a href="{{ route('user.profileindex', ['id' => $user->id]) }}" class="btn btn-primary">Ver Cuenta</a>
        </li>
        @endforeach
    </ul>
</div>