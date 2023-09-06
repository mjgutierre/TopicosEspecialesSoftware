<!-- ordenadar por puntaje / los de menor puntaje que aparezca de primero -->
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
                    <h5 class="card-title">
                        @if ($animal->getType() === 'gato')
                            <span style="color: blue;">{{$animal->getName()}}</span>
                        @else
                            {{$animal->getName()}}
                        @endif
                    </h5>
                    <p class="card-text">Id: {{$animal->getId()}}</p>
                    <p class="card-text">Edad: {{$animal->getAge()}}</p>
                    <p class="card-text">Tipo: {{$animal->getType()}}</p>
                    <p class="card-text">Puntaje: {{$animal->getReview()}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection