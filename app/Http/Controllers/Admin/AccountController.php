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
}
