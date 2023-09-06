@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
    <h1 class="custom-title">Listado de Estadisticas</h1>
        <div class="card-body">
            <div class="mt-4">
                <p class="custom-text">Cantidad de Mascotas Registradas:</p>
                @foreach($viewData['animalCount'] as $type => $count)
                <p class="custom-text">{{ $count }} {{ $type }}</p>
                @endforeach
                <p class="custom-text-avrg">Puntaje Promedio de Todas las Mascotas: {{ number_format($viewData['promedioReview'], 2) }}</p>
            </div>
        </div>
    </div>
    @endsection