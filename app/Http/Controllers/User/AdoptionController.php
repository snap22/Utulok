<?php

namespace App\Http\Controllers\User;

use App\Models\Dog;
use App\Models\Adoption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAdoptionRequest;

class AdoptionController extends Controller
{
    public function store(StoreAdoptionRequest $request)
    {
        $validated = $request->validated(); 
        if ( Dog::find($validated['dog_id'])->is_adopted )
        {
            return response("Chlpáč je už obsadený! ", 400);
        }

        $validated['account_id'] = Auth::user()->account_id;
        Adoption::create($validated);

        return response("Záznam bol uložený!", 200);
    }

    public function cancel($dogId)
    {
        $adoption = Adoption::where('dog_id', '=', $dogId)->firstOrFail();
        if ($adoption->account_id != Auth::user()->account_id)
        {
            abort(400, 'Nie je možné zrušiť záujem iného užívateľa');
        }
        $adoption->delete();
        return response("Záznam bol zrušený!", 200);
    }
}
