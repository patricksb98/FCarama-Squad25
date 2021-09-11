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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'App\Http\Controllers\LogarController@index')->name('login');
Route::post('login', 'App\Http\Controllers\LogarController@logar')->name('login');
Route::get('termos', 'App\Http\Controllers\ReservaController@verTermos')->name('termos')->middleware('auth');
Route::post('termos', 'App\Http\Controllers\ReservaController@concordarTermos')->name('termos')->middleware('auth');
Route::get('initial', 'App\Http\Controllers\ReservaController@initialView')->name('initial')->middleware('auth');
Route::get('reserva', 'App\Http\Controllers\ReservaController@index')->name('reserva')->middleware('auth');
Route::post('reserva', 'App\Http\Controllers\ReservaController@store')->name('reserva')->middleware('auth');
Route::get('reserva2', 'App\Http\Controllers\ReservaController@mostrarMesas')->name('reserva2')->middleware('auth');
Route::post('reserva2', 'App\Http\Controllers\ReservaController@escolherMesa')->name('reserva2')->middleware('auth');
Route::get('reserva3', 'App\Http\Controllers\ReservaController@mostrarCadeiras')->name('reserva3')->middleware('auth');
Route::post('reserva3', 'App\Http\Controllers\ReservaController@escolherCadeira')->name('reserva3')->middleware('auth');
Route::get('reserva4', 'App\Http\Controllers\ReservaController@revisarReserva')->name('reserva4')->middleware('auth');
Route::post('reserva4', 'App\Http\Controllers\ReservaController@confirmarReserva')->name('reserva4')->middleware('auth');
Route::get('confirmada', 'App\Http\Controllers\ReservaController@reservaConfirmada')->name('confirmada')->middleware('auth');
Route::post('confirmada', 'App\Http\Controllers\ReservaController@confirmarReserva')->name('confirmada')->middleware('auth');
Route::get('view/reservations', 'App\Http\Controllers\ReservaController@visualizarReserva')->name('visualizar')->middleware('auth');
Route::post('/reserva/remover/{id}', 'App\Http\Controllers\ReservaController@destroy');

Route::get('/teste', 'App\Http\Controllers\DataController@mes');


Route::get('/visualizando-email', function (){
    return new \App\Mail\Confirmacao('Patrick', '2021-09-08', 'São Paulo', '3', '14');
});

Route::get('/sair', function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/login');
});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
