<?php

namespace App\Http\Controllers\User;

use App\Models\Account;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\PasswordChangeRequest;
use App\Http\Requests\AuthenticateAccountRequest;

class AccountController extends Controller
{
    public function create()
    {
        return view('public.account.register');
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
        return view('public.account.login');
    }

    public function authenticate(AuthenticateAccountRequest $request)
    {
        $validated = $request->validated();

        if (Auth::attempt($validated))
        {
            return redirect('/')->with('success', 'Vítajte späť!');
        }

        return back()->withErrors(['email' => 'Nesprávne prihlasovacie údaje'])->withInput();
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Dovidenia!');
    }

    public function inspect()
    {
        $user = Auth::user();
        $address = Address::where('account_id', '=', $user->account_id)->first();
        return view('public.account.profile-view', ['user' => $user, 'address' => $address]);
    }

    public function edit()
    {
        return view('public.account.profile-edit', ['user' => Auth::user()]);
    }

    public function update(EditProfileRequest $request)
    {
        $attributes = $request->validated();

        $user = $this->getCurrentAccount();
        $user->update($attributes);

        return redirect('/profile')->with('success', 'Informácie boli aktualizované!');
    }

    public function destroy()
    {
        $user = $this->getCurrentAccount();

        Auth::logout();

        $user->delete();
        return redirect('/')->with('success', 'Účet bol vymazaný!');
    }

    public function confirmPassword()
    {
        return view('public.account.confirm-password');
    }

    public function validatePassword(Request $request)
    {
        if (! Hash::check($request->password, Auth::user()->password) )
        {
            return back()->withErrors(['password' => 'Neplatné heslo!']);
        }

        $request->session()->passwordConfirmed();
        //$request->session()->remove('auth.password_confirmed_at');

        return redirect()->intended()->with('success', 'Heslo bolo overené, môžete pokračovať.');
    }

    public function changePassword()
    {
        return view('public.account.change-password');
    }

    public function updatePassword(ChangePasswordRequest $request)
    {
        $attributes = $request->validated();

        if (! Hash::check($request->password, Auth::user()->password) )
        {
            return back()->withErrors(['password' => 'Neplatné heslo!']);
        }

        $user = $this->getCurrentAccount();
        $user->password = $attributes['new_password'];
        $user->save();

        return redirect('/profile')->with('success','Heslo úspešne bolo zmenené!');
    }

    private function getCurrentAccount()
    {
        return Account::find(Auth::user()->account_id);
    }
    
}
