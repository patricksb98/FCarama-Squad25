<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogarController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function logar(Request $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))){
            return redirect()->back()->withErrors("Falha");
        };

        dd("Logou!");
    }
}
