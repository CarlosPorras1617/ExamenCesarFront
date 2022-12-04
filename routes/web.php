<?php

use App\Http\Livewire\Clientes;
use App\Http\Livewire\Detalles;
use App\Http\Livewire\Facturas;
use App\Http\Livewire\Login;
use App\Http\Livewire\MostrarCliente;
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
//Route::get('/', [IndexController::class, 'index']);

//Route::get('/clientes', [ClienteController::class, 'mostrarClientes']);

//livewire
Route::get('/clientes', Clientes::class);
Route::get('/clientes/{id}', MostrarCliente::class);
Route::get('/login', Login::class);
Route::get('/detalles', Detalles::class);
Route::get('/facturas', Facturas::class);
