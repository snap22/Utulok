<?php

namespace App\Http\Controllers\Admin;

use App\Custom\Repositories\PictureRepository;
use App\Models\Dog;
use App\Models\Breed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\admin\StoreDogRequest;

class DogController extends Controller
{
    private $pictures;
    
    public function __construct()
    {
        $this->pictures = new PictureRepository();
    }

    public function view($dogId)
    {
        $dog = Dog::findOrFail($dogId);
        return view('admin.dog.view-dog', ['dog' => $dog]);
    }

    public function viewAll()
    {
        $dogs = Dog::orderBy('dog_id')->paginate(10);

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
        $validated['picture'] = $this->pictures->addNewPicture($request);
        Dog::create($validated);
        
        
        return redirect(route('dogs.view.all'));
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
        if (array_key_exists('picture', $validated))
        {
            $validated['picture'] = $this->pictures->changePicture($dog->picture, $request);
        }
        $dog->update($validated);
        return redirect(route('dogs.view.all'));
    }

    public function destroy($dogId)
    {
        $dog = Dog::findOrFail($dogId);
    
        $this->pictures->deletePicture($dog->picture);
        
        $dog->delete();
        return redirect(route('dogs.view.all'));
    }
}
