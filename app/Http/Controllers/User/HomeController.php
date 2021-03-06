<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('public.main.home');
    }

    public function about()
    {
        return view('public.main.about');
    }

    public function contact()
    {
        return view('public.main.contact');
    }

}
