<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateAccountRequest;
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
        return view('account.login');
    }

    public function authenticate(AuthenticateAccountRequest $request)
    {
        $validated = $request->validated();

        if (Auth::attempt($validated))
        {
            return redirect('/')->with('success', 'Vítajte späť!');
        }

        return back()->withErrors(['email' => 'Nesprávne prihlasovacie údaje']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Dovidenia!');
    }

    public function profileView()
    {
        return view('account.profile-view', ['user' => Auth::user()]);
    }

    public function profileEdit()
    {

    }

    public function profileStore()
    {

    }
}
