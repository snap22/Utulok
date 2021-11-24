<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreBreedRequest;
use Illuminate\Http\Request;
use App\Models\Breed;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BreedController extends Controller
{
    public function viewAll()
    {
        $breeds = Breed::orderBy('breed_id')->paginate(10);
        return view('admin.breed.view-all', ['breeds' => $breeds]);
    }

    public function create()
    {
        return view('admin.breed.create');
    }

    public function store(StoreBreedRequest $request)
    {
        $validated = $request->validated();
        Breed::create($validated);
        return redirect(route('breeds.view.all'));
    }

    public function destroy($breedId)
    {
        $breed = Breed::findOrFail($breedId);
        $breed->delete();
        return redirect(route('breeds.view.all'));
    }
}
