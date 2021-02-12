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
use \App\Http\Controllers\PratoController;
use \App\Http\Controllers\AgendaController;
use \App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::post('/pratos/novo', [PratoController::class, 'store'])->name('add-prato');

Route::post('/agendas/nova', [AgendaController::class, 'store'])->name('add-agenda');


require __DIR__.'/auth.php';
