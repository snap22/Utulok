<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Dog;

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
        
    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
