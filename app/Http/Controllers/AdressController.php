<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\DB;

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

    }

    public function store(StoreAddressRequest $request)
    {
        $validated = $request->validated();
        Address::create($validated);
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
