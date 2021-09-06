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

Route::get('login', 'App\Http\Controllers\LogarController@index');
Route::post('login', 'App\Http\Controllers\LogarController@logar')->name('login');
Route::get('reserva', 'App\Http\Controllers\ReservaController@index')->name('reserva')->middleware('auth');
Route::post('reserva', 'App\Http\Controllers\ReservaController@store')->name('reserva')->middleware('auth');
Route::get('reserva2', 'App\Http\Controllers\Reserva2Controller@index')->name('reserva2')->middleware('auth');

Route::get('sair', function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/login');
});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
