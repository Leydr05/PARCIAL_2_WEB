<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientesController;

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

Route::get('clientes/registrar',[clientesController::class, 'create'])->name('clientes.create');
Route::post('clientes/guardar',[clientesController::class, 'store'])->name('clientes.store');
Route::get('clientes/listar',[clientesController::class, 'index'])->name('clientes.index');


