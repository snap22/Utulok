<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dog;
use App\Models\Account;
use App\Models\Adoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class AdoptionController extends Controller
{
    public function viewAll()
    {
        $adoptions = DB::table('adoption')
                        ->join('dog', 'adoption.dog_id', '=', 'dog.dog_id')
                        ->join('account', 'adoption.account_id', '=', 'account.account_id')
                        ->orderBy('adoption.date_adopted', 'DESC')
                        ->select('adoption.adoption_id', 'account.first_name', 'account.last_name' ,'dog.name' ,'adoption.date_adopted')
                        ->paginate(10);


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
