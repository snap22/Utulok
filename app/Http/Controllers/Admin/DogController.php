<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dog;
use App\Models\Breed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\admin\StoreDogRequest;

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
        // dd($validated);
        
        if ($validated['picture'] != config('constants.default_picture'))
        {
            $path = $request->file('picture')->store('dogs');
            $validated['picture'] = $path;
        }
        
        dd($validated);
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
        // TODO: update image
        return $this->viewAll();
    }

    public function destroy($dogId)
    {
        $dog = Dog::findOrFail($dogId);
        $dog->delete();
        // TODO: remove image
        return $this->viewAll();
    }
}
