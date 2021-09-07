<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        return view('agendamento.agendPag1Local');
    }

    public function store(Request $request)
    {
        $local = $request->local;
        $data = $request->data;

        $request->session()->put('local', $local);
        $request->session()->put('data', $data);

        return redirect()->route('reserva2');

    }
}
