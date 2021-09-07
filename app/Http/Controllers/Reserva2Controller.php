<?php

namespace App\Http\Controllers;

use App\Models\Consultor;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Reserva2Controller extends Controller
{
    public function index()
    {
        $data = session('data');
        $reservas = Reserva::all();
        $numero = count($reservas->where('dia', $data)->where('id_mesa', 1));

        $local = session('local');

        return view('agendamento.agendPag2Mesa', compact('local', 'numero', 'reservas', 'data'));
    }

    public function store(Request $request)
    {
        $mesa = $request->id_mesa;

        $request->session()->put('id_mesa', $mesa);

        return redirect()->route('reserva3');

    }
}
