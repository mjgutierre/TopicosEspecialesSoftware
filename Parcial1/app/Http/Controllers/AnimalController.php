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
        Animal::create($request->only(['name', 'age']));

        return redirect(route('animal.list'))->with('success');
    }

    public function list(): View
    {
        $viewData = [];
        $viewData['title'] = 'Animals - Online Store';
        $viewData['subtitle'] = 'List of animals';
        $viewData['animals'] = Animal::all();

        return view('animal.list')->with('viewData', $viewData);
    }

    public function delete(string $id, Request $request): RedirectResponse
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return back();
    }
}
