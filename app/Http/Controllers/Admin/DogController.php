<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\StoreDogRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Dog;
use App\Models\Breed;

class DogController extends Controller
{
    public function view($dogId)
    {
        $dog = Dog::findOrFail($dogId);
        return view('admin.dog.view-dog', ['dog' => $dog]);
    }

    public function viewAll()
    {
        $dogs = Dog::all()->sortBy('dog_id');

        return view('admin.dog.view-all', ['dogs' => $dogs]);
    }

    public function create()
    {
        $breeds = Breed::all()->sortBy('breed_id');
        return view('admin.dog.create', ['breeds' => $breeds]);
    }

    public function store(StoreDogRequest $request)
    {
        $validated = $request->validated();
        Dog::create($validated);
        
        return $this->viewAll();
    }

    public function edit($dogId)
    {
        $dog = Dog::findOrFail($dogId);
        $breeds = Breed::all()->sortBy('breed_id');

        return view('admin.dog.edit', ['dog' => $dog, 'breeds' => $breeds]);
    }

    public function update(StoreDogRequest $request, $dogId)
    {
        $dog = Dog::findOrFail($dogId);
        $validated = $request->validated();

        $dog->update($validated);

        return $this->viewAll();
    }

    public function destroy($dogId)
    {
        $dog = Dog::findOrFail($dogId);
        $dog->delete();
        return $this->viewAll();
    }
}
