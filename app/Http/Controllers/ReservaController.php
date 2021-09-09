<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function verTermos()
    {
        return view('agendamento.agendPagCondicoes');
    }

    public function concordarTermos()
    {
        return redirect()->route('reserva');
    }


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

    public function mostrarMesas()
    {
        if(!session('local') || !session('data')){
            return redirect()->route('reserva');
        }

        $data = session('data');
        $reservas = Reserva::all();
        $numero = count($reservas->where('dia', $data)->where('id_mesa', 1));

        $local = session('local');

        return view('agendamento.agendPag2Mesa', compact('local', 'numero', 'reservas', 'data'));
    }

    public function escolherMesa(Request $request)
    {
        $mesa = $request->id_mesa;

        $request->session()->put('id_mesa', $mesa);

        return redirect()->route('reserva3');

    }

    public function mostrarCadeiras()
    {
        if(!session('id_mesa')){
            return redirect()->route('reserva2');
        }

        $mesa = session('id_mesa');
        $data = session('data');
        $local = session(('local'));
        $cadeira = (DB::table('cadeiras')->where('id_mesa', $mesa)->pluck('id'));

        $reservas = Reserva::all();

        $reservada1 = count($reservas->where('dia', $data)->where('local', $local)->where('id_cadeira', $cadeira[0]));
        $reservada2 = count($reservas->where('dia', $data)->where('local', $local)->where('id_cadeira', $cadeira[1]));
        $reservada3 = count($reservas->where('dia', $data)->where('local', $local)->where('id_cadeira', $cadeira[2]));
        $reservada4 = count($reservas->where('dia', $data)->where('local', $local)->where('id_cadeira', $cadeira[3]));
        $reservada5 = count($reservas->where('dia', $data)->where('local', $local)->where('id_cadeira', $cadeira[4]));

        return view('agendamento.agendPag3Cadeira', compact('cadeira', 'reservas', 'data', 'local', 'reservada1', 'reservada2', 'reservada3','reservada4', 'reservada5'));
    }

    public function escolherCadeira(Request $request)
    {
        $cadeira = $request->cadeira;

        $request->session()->put('id_cadeira', $cadeira);

        return redirect()->route('reserva4');

    }

    public function revisarReserva()
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

    public function confirmarReserva()
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

        $reservas = Reserva::all();

        $reservada = count($reservas->where('dia', $data)->where('local', $local)->where('id_cadeira', $cadeira));

        if($reservada == 0){
            $reserva->save();
            session()->forget(['local', 'data', 'id_mesa', 'id_cadeira']);

            $email =  new \App\Mail\Confirmacao($name_consultor, $data, $local , $mesa, $cadeira);
            $email->subject = 'Confirmação de Reserva!';
            \Illuminate\Support\Facades\Mail::to($email_consultor)->send($email);

            return redirect()->route('confirmada');
        }else{
             echo "Deu certo!";
        }

    }

    public function reservaConfirmada()
    {
        return view('agendamento.agendPag5Parabens');
    }

    public function reservarNovamente()
    {
        return redirect()->route('reserva');
    }

}
