<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountRequest;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function create()
    {
        return view('account.register');
    }

    public function store(StoreAccountRequest $request)
    {
        $validated = $request->validated();
        
        $user = Account::create($validated);

        Auth::login($user);

        session()->flash('success', 'Váš účet bol vytvorený!');

        return redirect("/");
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
