<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Termos;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function verTermos()
    {
        $id_consultor = Auth::id();
        $termos = Termos::all();
        $aceitou = count($termos->where('id_consultor', $id_consultor)->where('aceitou', 1));

        if($aceitou >= 1){
            return redirect()->route('initial');
        }else{
            return view('agendamento.agendPagCondicoes');
        }

    }

    public function concordarTermos(Request $request)
    {
        $id_consultor = Auth::id();
        $aceitou = new Termos();

        $aceitou->id_consultor = $id_consultor;
        $aceitou->aceitou = 1;
        $aceitou->save();

        return redirect()->route('inicio');
    }

    public function initialView()
    {
        return view('agendamento.AgendPagInicial');
    }


    public function index()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        $erro = session('erro');
        $errorMessage = [];

        if(!empty($erro)){
            $errorMessage = [
                'erro' => $erro
            ];
        }

        return view('agendamento.agendPag1Local', $errorMessage);
    }

    public function store(Request $request)
    {
        $local = $request->local;
        $data = $request->data;

        $id_consultor = Auth::id();
        $reservas = Reserva::all();

        $consulta = (count($reservas->where('id_consultor', $id_consultor)->where('dia', $data)));

        if($consulta > 0){
            session()->flash('erro', 'Você já tem uma reserva para esse dia! Cancele sua reserva atual caso queira mudar a data.');
            return redirect()->route('reserva');
        }


        $request->session()->put('local', $local);
        $request->session()->put('data', $data);

        return redirect()->route('reserva/etapa2');

    }

    public function mostrarMesas()
    {
        if(!session('local') || !session('data')){
            return redirect()->route('reserva/etapa1');
        }

        $data = session('data');
        $local = session('local');
        $reservas = Reserva::all();
        $numero = $reservas->where('dia', $data)->where('local', $local)->toArray();
        $blockedTables = [];

        foreach ($numero as $n){
            $blockedTables[$n['id_mesa']] = array_key_exists($n['id_mesa'], $blockedTables)? $blockedTables[$n['id_mesa']] + 1 : 1;
        }

        $parametros = ['blockedTables' => $blockedTables];

        $erro = session('erro');
        $errorMessage = [];

        if(!empty($erro)){
            $errorMessage = [
                'erro' => $erro
            ];
        }

        $errorMessage['blockedTables'] = $blockedTables;

        $reservasSP1 = count($reservas->where('dia', $data)->where('local', 'São Paulo 1º Andar'));
        $reservasSP2 = count($reservas->where('dia', $data)->where('local', 'São Paulo 2º Andar'));
        $reservasSP = $reservasSP1 + $reservasSP2;
        $reservasSantos = count($reservas->where('dia', $data)->where('local', 'Santos'));

        return view('agendamento.agendPag2Mesa', compact('local', 'numero', 'reservas', 'data', 'reservasSP', 'reservasSantos'), $errorMessage);
    }

    public function escolherMesa(Request $request)
    {
        $mesa = $request->id_mesa;

        $request->session()->put('id_mesa', $mesa);

        return redirect()->route('reserva/etapa3');

    }

    public function mostrarCadeiras()
    {
        if(!session('id_mesa')){
            return redirect()->route('reserva/etapa2');
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

        return redirect()->route('reserva/etapa4');

    }

    public function revisarReserva()
    {
        if(!session('id_cadeira')){
            return redirect()->route('reserva/etapa3');
        }
        $dataController = new DataController();

        $local = session(('local'));
        $mesa = session(('id_mesa'));
        $cadeira = session(('id_cadeira'));
        $data = session(('data'));

        $diaSemana = $dataController->semana(date('D', strtotime($data)));
        $dia = date('d', strtotime($data));
        $mes = $dataController->mes(date('m', strtotime($data)));
        $ano = date('Y', strtotime($data));

        return view('agendamento.agendPag4Confirme', compact(['local', 'mesa', 'cadeira', 'data', 'diaSemana', 'dia', 'mes', 'ano']));
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

        if(!$reservada == 0){
            session()->flash('erro', 'Alguém foi mais rápido que você! Por favor, faça a sua reserva novamente.');
            return redirect()->route('reserva/etapa2');
        }else{

            $reserva->save();
            session()->forget(['local', 'data', 'id_mesa', 'id_cadeira']);

            $email =  new \App\Mail\Confirmacao($name_consultor, $data, $local , $mesa, $cadeira);
            $email->subject = 'Confirmação de Reserva!';
            \Illuminate\Support\Facades\Mail::to($email_consultor)->send($email);

            return redirect()->route('reserva/confirmada');
        }

    }

    public function reservaConfirmada()
    {
        return view('agendamento.agendPag5Parabens');
    }

    public function reservarNovamente()
    {
        return redirect()->route('reserva/etapa1');
    }

    public function visualizarReserva()
    {
        $id_consultor = Auth::id();
        $reservas = Reserva::all();
        $dia = Carbon::now('GMT-3');

        $reserva = $reservas->where('id_consultor', $id_consultor)->where('dia', '>', $dia->toDateString())->sortBy('dia');

        return view ('agendamento.agendPagVisualizar', compact('reserva'));
    }

    public function destroy(Request $request)
    {
        Reserva::destroy($request->id);

        return redirect('visualizar/reservas');
    }

}
