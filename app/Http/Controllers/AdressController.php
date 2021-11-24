<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAddressRequest;

class AdressController extends Controller
{
    public function viewAll()
    {
        $addresses = Address::orderBy('address_id')->paginate(10);
    }

    public function view($addressId)
    {
        $address = Address::findOrFail($addressId);
    }

    public function create()
    {
        return view('public.address.create');
    }

    public function store(StoreAddressRequest $request)
    {
        $validated = $request->validated();
        $validated['account_id'] = Auth::user()->account_id;
        Address::create($validated);

        return redirect('/')->with('success', 'Adresa bola úspešne pridaná!');
    }

    public function edit($addressId)
    {

    }

    public function update($addressId, StoreAddressRequest $request)
    {

    }

    public function destroy($addressId)
    {
        $address = Address::findOrFail($addressId);
        $address->delete();
    }
}
