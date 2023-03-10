<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    public function index()
    {
        return view('layout.home')->with([
            'user' => Auth::user()
        ]);
    }

    public function hal1(){
        return view('layout.menu1')->with([
            'user' => Auth::user()
        ]);
    }

    public function hal2(){
        return view('layout.menu2')->with([
            'user' => Auth::user()
        ]);
    }
}
