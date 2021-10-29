<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\UpdateAccountRequest;
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

        return view('admin.account.view-account', ['user' => $user]);
    }

    public function edit($accountId)
    {
        $user = Account::findOrFail($accountId);

        return view('admin.account.edit-account', ['user' => $user]);
    }

    public function update(UpdateAccountRequest $request, $accountId)
    {
        $user = Account::findOrFail($accountId);
        $attributes = $request->validated();

        $user->update($attributes);
        // return redirect('/admin')->with('success', 'Účet bol úspešne aktualizovaný!');
        return redirect('/admin');
    }

    public function destroy($accountId)
    {
        if (auth()->user()->account_id == $accountId)
        {
            abort(500);
        }

        $user = Account::findOrFail($accountId);
        $user->delete();
        return redirect('/admin');
    }
}
