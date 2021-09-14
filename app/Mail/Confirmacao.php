<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Confirmacao extends Mailable
{
    use Queueable, SerializesModels;

    public $nome_consultor;
    public $dia;
    public $mes;
    public $local;
    public $id_mesa;
    public $id_cadeira;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome_consultor, $dia, $mes, $local, $id_mesa, $id_cadeira)
    {
        $this->nome_consultor = $nome_consultor;
        $this->dia = $dia;
        $this->mes = $mes;
        $this->local = $local;
        $this->id_mesa = $id_mesa;
        $this->id_cadeira = $id_cadeira;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.confirmacao.confirmacao');
    }
}
