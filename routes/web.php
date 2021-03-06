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
use App\Models\Prato;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::post('/pratos/novo', [PratoController::class, 'store'])->name('add-prato');

Route::model('prato', Prato::class);
Route::get('/pratos/remover/{prato}', [PratoController::class, 'destroy'])->name('rm-prato')->middleware('auth');

Route::post('/agendas/nova', [AgendaController::class, 'store'])->name('add-agenda');





require __DIR__.'/auth.php';
