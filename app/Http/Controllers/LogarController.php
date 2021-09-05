<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogarController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect()->route('teste');
        };
        return view('login.login');
    }

    public function logar(Request $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))){
            return redirect()->back()->withErrors("Falha");
        };

        return redirect()->route('teste');
    }
}


