<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dog;
use Illuminate\Support\Facades\DB;

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
                $view = view('public.dog.load-more', ['dogs' => $dogs])->render();
                return response()->json(['html' => $view, 'hasNextPage' => $hasNextPage]);
            } 
        }


        return view('public.dog.view-all', ['dogs' => $dogs]);
    }

    public function view($dogId)
    {
        $dog = Dog::findOrFail($dogId);
        return view('public.dog.view', ['dog' => $dog]);
    }
}
