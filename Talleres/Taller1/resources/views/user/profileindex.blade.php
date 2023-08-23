@include('layouts.header')
<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
<div class="container">
    <h1>User Details - {{ $user->name }}</h1>
    <div class="user-details">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Budget:</strong></p>
        <form action="{{ route('user.delete', ['id' => $user->id]) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Eliminar Cuenta</button>
        </form>
    </div>
</div>