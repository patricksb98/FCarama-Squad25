<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Sodium\crypto_aead_aes256gcm_decrypt;

class Reserva4Controller extends Controller
{
    public function index()
    {
        $local = session(('local'));
        $mesa = session(('id_mesa'));
        $cadeira = session(('id_cadeira'));
        $data = session(('data'));

        return view('agendamento.agendPag4Confirme', compact(['local', 'mesa', 'cadeira', 'data']));
    }

    public function store()
    {
        $id_consultor = Auth::id();
        $local = session(('local'));
        $cadeira = session(('id_cadeira'));
        $data = session(('data'));

        $reserva = new Reserva();

        $reserva->id_consultor = $id_consultor;
        $reserva->id_cadeira = $cadeira;
        $reserva->local = $local;
        $reserva->dia = $data;
        $reserva->status = 1;

        $reserva->save();

        print_r($reserva);
    }
}
