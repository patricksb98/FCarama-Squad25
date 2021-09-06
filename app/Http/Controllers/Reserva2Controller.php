<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Reserva2Controller extends Controller
{
    public function index()
    {
        $local = session('local');

        return view('agendamento.agendPag2Mesa', compact('local'));
    }
}
