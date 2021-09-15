<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogarController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect()->route('inicio');
        };
        $erro = session('erro');
        $errorMessage = [];

        if(!empty($erro)){
            $errorMessage = [
                'erro' => $erro
            ];
        }

        return view('login.login', $errorMessage);
    }

    public function logar(Request $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))){
            session()->flash('erro', 'Usuário e/ou senha incorretos.');
            return redirect()->route('login');
        };

        return redirect()->route('inicio');
    }
}


