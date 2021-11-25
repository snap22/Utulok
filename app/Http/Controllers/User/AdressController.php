<?php

namespace App\Http\Controllers\User;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Controllers\Controller;

class AdressController extends Controller
{
    public function create()
    {
        if (Auth::user()->has_address)
        {
            return redirect(route('address.edit'));
        }

        return view('public.address.create');
    }

    public function store(StoreAddressRequest $request)
    {
        $validated = $request->validated();
        $validated['account_id'] = Auth::user()->account_id;
        Address::create($validated);

        return redirect('/profile')->with('success', 'Adresa bola úspešne pridaná!');
    }

    public function edit()
    {
        if (! Auth::user()->has_address)
        {
            return redirect(route('address.create'));
        }

        $address = Address::where('account_id', '=', Auth::user()->account_id)->firstOrFail();
        return view('public.address.edit', ['address' => $address]);
    }

    public function update(StoreAddressRequest $request)
    {
        $user = Auth::user();
        $validated = $request->validated();
        $validated['account_id'] = $user->account_id;
        $address = Address::where('account_id', '=', $user->account_id)->firstOrFail();
        $address->update($validated);
        return redirect('/profile')->with('success', 'Adresa bola úspešne aktualizovaná!');
    }

    public function destroy()
    {
        $address = Address::where('account_id', '=', Auth::user()->account_id)->firstOrFail();
        $address->delete();
        return redirect('/profile')->with('success', 'Adresa bola zmazaná!');
    }
}
