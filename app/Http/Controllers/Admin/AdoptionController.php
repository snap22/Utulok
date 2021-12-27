<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dog;
use App\Models\Account;
use App\Models\Adoption;


class AdoptionController extends Controller
{
    public function viewAll()
    {
        $adoptions = Adoption::orderBy('date_adopted', 'DESC')->paginate(10);

        return view('admin.adoption.view-all', ['adoptions' => $adoptions]);
    }

    public function view($adoptionId) 
    {
        $adoption = Adoption::findOrFail($adoptionId);
        $account = Account::find($adoption->account_id);
        $dog = Dog::find($adoption->dog_id);

        return view('admin.adoption.view', ['adoption' => $adoption, 'dog' => $dog, 'account' => $account]);
    }

    public function destroy($adoptionId)
    {
        $adoption = Adoption::findOrFail($adoptionId);
        $adoption->delete();
        return redirect(route('adoptions.view.all'));
    }
}
