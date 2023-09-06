@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
    <h1 class="custom-title">Listado de Animales</h1>
    <div class="row">
        @foreach($viewData['animals'] as $animal)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$animal->getName()}}</h5>
                    <p class="card-text">Edad: {{$animal->getAge()}}</p>
                    <form action="{{route('animal.delete', ['id' => $animal->getId()]) }}" method="POST">
                        @csrf
                        <button type="submit" name="button" class="btn btn-danger">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection