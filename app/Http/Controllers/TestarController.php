<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestarController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        return view('teste');
    }
}
