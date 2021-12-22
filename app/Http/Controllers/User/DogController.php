<?php

namespace App\Http\Controllers\User;

use App\Models\Dog;
use App\Models\Adoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DogController extends Controller
{
    public function viewAll(Request $request)
    {
        $dogs = Dog::orderBy('dog_id')->paginate(4); 
        if ($request->ajax()) {
            
            if ($request->get('page') > $dogs->lastPage())
            {
                return response("Nenašli sa ďalší chlpáči! ", 404);
            }
            else
            {
                $hasNextPage = $request->get('page') < $dogs->lastPage();
                $view = view('components.public.dogs', ['dogs' => $dogs])->render();
                return response()->json(['html' => $view, 'hasNextPage' => $hasNextPage]);
            } 
        }


        return view('public.dog.view-all', ['dogs' => $dogs]);
    }

    public function view($dogId)
    {
        $dog = Dog::findOrFail($dogId);
        $isOwner = false;

        if (Auth::user() != null && $dog->is_adopted)
        {
            $isOwner = Adoption::where('dog_id','=',$dog->dog_id)->where('account_id','=',Auth::user()->account_id)->exists();
        }
        

        return view('public.dog.view', ['dog' => $dog, 'isOwner' => $isOwner]);
    }
}
