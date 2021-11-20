<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $counts = [
            'dogs' => DB::table('dog')->count(),
            'accounts' => DB::table('account')->count(),
            'adminAccounts' => DB::table('account')->where('account_role','=','A')->count(),
            'breeds' => DB::table('breed')->count(),
            'messages' => DB::table('contact')->count(),
            'newMessages' => DB::table('contact')->where('solved', '=', 0)->count(),
        ];

        return view('admin.main.index', ['counts' => $counts]);
    }
}
