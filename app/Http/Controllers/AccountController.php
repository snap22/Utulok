<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function create()
    {
        return view('account.register');
    }

    public function store()
    {
        var_dump(request()->all());
        // return "Hello world";
    }

    public function login()
    {

    }

    public function logout()
    {

    }

    public function profile()
    {

    }
}
