<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        'http://localhost:8000/login',
        'http://localhost:8000/termos',
        'http://localhost:8000/reserva/etapa1',
        'http://localhost:8000/reserva/etapa2',
        'http://localhost:8000/reserva/etapa3',
        'http://localhost:8000/reserva/etapa4',
        'http://localhost:8000/reserva/confirmada',
        'http://localhost:8000/reserva/remover/{id}',

    ];
}
