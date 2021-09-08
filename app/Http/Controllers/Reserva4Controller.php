<?php

namespace App\Http\Controllers;

use App\Mail\Confirmacao;
use App\Models\Reserva;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Sodium\crypto_aead_aes256gcm_decrypt;

class Reserva4Controller extends Controller
{
    public function index()
    {
        if(!session('id_cadeira')){
            return redirect()->route('reserva3');
        }

        $local = session(('local'));
        $mesa = session(('id_mesa'));
        $cadeira = session(('id_cadeira'));
        $data = session(('data'));

        return view('agendamento.agendPag4Confirme', compact(['local', 'mesa', 'cadeira', 'data']));
    }

    public function store()
    {
        $user = Auth::user();
        $name_consultor = $user->name;
        $email_consultor = $user->email;
        $id_consultor = Auth::id();
        $local = session(('local'));
        $cadeira = session(('id_cadeira'));
        $data = session(('data'));
        $mesa = session(('id_mesa'));

        $reserva = new Reserva();

        $reserva->id_consultor = $id_consultor;
        $reserva->id_mesa = $mesa;
        $reserva->id_cadeira = $cadeira;
        $reserva->local = $local;
        $reserva->dia = $data;

        $reserva->save();

        session()->forget(['local', 'data', 'id_mesa', 'id_cadeira']);

        $email =  new \App\Mail\Confirmacao($name_consultor, $data, $local , $mesa, $cadeira);
        $email->subject = 'Confirmação de Reserva!';
        \Illuminate\Support\Facades\Mail::to($email_consultor)->send($email);

    }
}
