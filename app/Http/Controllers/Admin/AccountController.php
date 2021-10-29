<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function viewAll()
    {
        $users = Account::all()
                    ->sortBy('account_id')
                    ->take(20);
                    

        return view('admin.account.view-all', ['users' => $users]);
    }

    public function view($accountId)
    {
        $user = Account::findOrFail($accountId);

        return view('admin.account.view-profile', ['user' => $user]);
    }

    public function edit($accountId)
    {
        $user = Account::findOrFail($accountId);
        
        return view('admin.account.edit-profile', ['user' => $user]);
    }

    public function update($accountId)
    {
        $user = Account::findOrFail($accountId);
    }

    public function destroy($accountId)
    {
        $user = Account::findOrFail($accountId);
    }
}
