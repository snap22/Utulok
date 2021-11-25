<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dog;
use Illuminate\Support\Facades\DB;

class DogController extends Controller
{
    public function viewAll()
    {
        $dogs = Dog::orderBy('dog_id')->paginate(10);

        return view('public.dog.view-all', ['dogs' => $dogs]);
    }

    public function view($dogId)
    {
        $dog = Dog::findOrFail($dogId);
        return view('public.dog.view', ['dog' => $dog]);
    }
}
