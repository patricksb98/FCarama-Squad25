<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class DataController extends Controller
{
    public function semana($dataSemana)
    {
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

        switch ($dataSemana){
            case "Mon":
                $dataSemana = "Segunda";
                break;
            case "Tue":
                $dataSemana = "Terça";
                break;
            case "Wed":
                $dataSemana = "Quarta";
                break;
            case "Thu":
                $dataSemana = "Quinta";
                break;
            case "Fri":
                $dataSemana = "Sexta";
                break;
            case "Sat":
                $dataSemana = "Sábado";
                break;
            case "Sun":
                $dataSemana = "Domingo";
        }

        return $dataSemana;
    }

    public function mes($mes)
    {
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

        switch ($mes){
            case "01":
                $mes = "Janeiro";
                break;
            case "02":
                $mes = "Fevereiro";
                break;
            case "03":
                $mes = "Março";
                break;
            case "04":
                $mes = "Abril";
                break;
            case "05":
                $mes = "Maio";
                break;
            case "06":
                $mes = "Junho";
                break;
            case "07":
                $mes = "Julho";
                break;
            case "08":
                $mes = "Agosto";
                break;
            case "09":
                $mes = "Setembro";
                break;
            case "10":
                $mes = "Outubro";
                break;
            case "11":
                $mes = "Novembro";
                break;
            case "12":
                $mes = "Dezembro";
                break;

        }

        return $mes;
    }

    public function diaSemana()
    {
        $data = '2021-09-16';
        $semana =  date('D', strtotime($data));

        $dataSemana = $this->index($semana);

        echo $dataSemana;

    }



}
