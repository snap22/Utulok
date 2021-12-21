<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdoptionRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Dog;
use App\Models\Account;
use App\Models\Adoption;
use Illuminate\Support\Facades\Auth;

class AdoptionController extends Controller
{
    public function viewAll()
    {
        $adoptions = Adoption::orderBy('adoption_id')->paginate(10);

        return view('admin.adoption.view-all', ['adoptions' => $adoptions]);
    }

    public function view($adoptionId) 
    {
        $adoption = Adoption::findOrFail($adoptionId);
        $account = Account::find($adoption->account_id);
        $dog = Dog::find($adoption->dog_id);

        return view('admin.adoption.view', ['adoption' => $adoption, 'dog' => $dog, 'account' => $account]);
    }

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
            abort(400);
        }
        $adoption->delete();
        return response("Záznam bol zrušený!", 200);
    }

    public function destroy($adoptionId)
    {
        $adoption = Adoption::findOrFail($adoptionId);
        $adoption->delete();
        return redirect(route('adoptions.view.all'));
    }
}
