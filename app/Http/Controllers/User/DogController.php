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
        $dogs = Dog::all()->sortBy('dog_id');

        return view('public.dog.view-all', ['dogs' => $dogs]);
    }

    public function view($dogId)
    {
        $dog = Dog::findOrFail($dogId);
        return view('public.dog.view', ['dog' => $dog]);
    }
}
