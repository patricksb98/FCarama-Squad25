<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reserva3Controller extends Controller
{
    public function index()
    {
        $mesa = session('id_mesa');

        $cadeira = (DB::table('cadeiras')->where('id_mesa', $mesa)->pluck('id'));

        return view('agendamento.agendPag3Cadeira', compact('cadeira'));
    }

    public function store(Request $request)
    {
        $cadeira = $request->cadeira;

        $request->session()->put('id_cadeira', $cadeira);

        return redirect()->route('reserva4');

    }
}
