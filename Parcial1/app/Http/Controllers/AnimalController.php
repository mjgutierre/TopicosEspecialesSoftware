<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnimalController extends Controller
{
    public function create(): View
    {
        return view('animal.create');
    }

    public function createPost(Request $request): RedirectResponse
    {
        Animal::create($request->only(['name', 'age', 'type', 'review']));

        return redirect(route('animal.list'))->with('success');
    }

    public function list(): View
    {
        $viewData = [];
        $viewData['title'] = 'Animals - Online';
        $viewData['subtitle'] = 'List of animals';
        $viewData['animals'] = Animal::orderBy('review')->get(); // Ordena por puntaje ascendente

        return view('animal.list')->with('viewData', $viewData);
    }

    public function statistics(): View
    {
        $viewData = [];
        $viewData['title'] = 'Animals - Online';
        $viewData['subtitle'] = 'List of statistics';
        $animals = Animal::all();

        $animalCount = $animals->groupBy('type')->map->count(); //tipo
        $promedioReview = $animals->avg('review'); //promedio

        $viewData['animals'] = $animals;
        $viewData['animalCount'] = $animalCount;
        $viewData['promedioReview'] = $promedioReview;

        return view('animal.statistics')->with('viewData', $viewData);
    }
}
