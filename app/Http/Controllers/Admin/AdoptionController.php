<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdoptionRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Dog;
use App\Models\Account;
use App\Models\Adoption;
use Illuminate\Support\Facades\Auth;

class AdoptionController extends Controller
{
    public function viewAll()
    {
        $adoptions = Adoption::orderBy('adoption_id')->paginate(10);

        return view('admin.dog.view-all', ['adoptions' => $adoptions]);
    }

    public function view($adoptionId) 
    {
        $adoption = Adoption::findOrFail($adoptionId);

        return view('admin.adoption.view', ['dog' => $adoption]);
    }

    public function create($dogId)
    {
        $dog = Dog::findOrFail($dogId);
        return view('public.adoption.create', ['dog' => $dog]);
    }

    public function store(StoreAdoptionRequest $request)
    {
        $validated = $request->validated();

        if ( ! Dog::find($validated['dog_id'])->first()->is_available)
        {
            // pes už je obsadeny
        }

        $validated['account_id'] = Auth::user()->account_id;

        Adoption::create($validated);
        return redirect('public.dogs.view.all')->with('success', 'Adoptácia prebehla úspešne!');
    }

    public function destroy($adoptionId)
    {
        $adoption = Adoption::findOrFail($adoptionId);
        $adoption->delete();
        return redirect('adoptions.view.all');
    }
}
