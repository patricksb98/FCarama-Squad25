<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function (){
    return redirect('login');
});

Route::get('login', 'App\Http\Controllers\LogarController@index')->name('login');
Route::post('login', 'App\Http\Controllers\LogarController@logar')->name('login');
Route::get('termos', 'App\Http\Controllers\ReservaController@verTermos')->name('termos')->middleware('auth');
Route::post('termos', 'App\Http\Controllers\ReservaController@concordarTermos')->name('termos')->middleware('auth');
Route::get('inicio', 'App\Http\Controllers\ReservaController@inicio')->name('inicio')->middleware('auth');
Route::get('reserva/etapa1', 'App\Http\Controllers\ReservaController@mostrarLocaisEDias')->name('reserva/etapa1')->middleware('auth');
Route::post('reserva/etapa1', 'App\Http\Controllers\ReservaController@escolherLocalEDia')->name('reserva/etapa1')->middleware('auth');
Route::get('reserva/etapa2', 'App\Http\Controllers\ReservaController@mostrarMesas')->name('reserva/etapa2')->middleware('auth');
Route::post('reserva/etapa2', 'App\Http\Controllers\ReservaController@escolherMesa')->name('reserva/etapa2')->middleware('auth');
Route::get('reserva/etapa3', 'App\Http\Controllers\ReservaController@mostrarCadeiras')->name('reserva/etapa3')->middleware('auth');
Route::post('reserva/etapa3', 'App\Http\Controllers\ReservaController@escolherCadeira')->name('reserva/etapa3')->middleware('auth');
Route::get('reserva/etapa4', 'App\Http\Controllers\ReservaController@revisarReserva')->name('reserva/etapa4')->middleware('auth');
Route::post('reserva/etapa4', 'App\Http\Controllers\ReservaController@confirmarReserva')->name('reserva/etapa4')->middleware('auth');
Route::get('reserva/confirmada', 'App\Http\Controllers\ReservaController@reservaConfirmada')->name('reserva/confirmada')->middleware('auth');
Route::post('reserva/confirmada', 'App\Http\Controllers\ReservaController@confirmarReserva')->name('reserva/confirmada')->middleware('auth');
Route::get('visualizar/reservas', 'App\Http\Controllers\ReservaController@visualizarReserva')->name('visualizar')->middleware('auth');
Route::delete('reserva/remover/{id}', 'App\Http\Controllers\ReservaController@cancelarReserva')->name('cancelar')->middleware('auth');

Route::get('/sair', function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/login');
});
