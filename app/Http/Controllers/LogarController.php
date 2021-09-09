<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogarController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect()->route('termos');
        };
        $erro = session('erro');
        $datas = [];

        if(!empty($erro)){
            $datas = [
                'erro' => $erro
            ];
        }

        return view('login.login', $datas);
    }

    public function logar(Request $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))){
            session()->flash('erro', 'Usuário e/ou senha incorretos.');
            return redirect()->route('loginn');
        };

        return redirect()->route('termos');
    }
}


