<?php

use App\Http\Controllers\AparelhoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservaController;
use App\Models\Aparelho;
use App\Models\Reserva;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');


Route::view('/agendamentos', 'agendamentos')->name('agendamentos');




Route::middleware('auth')->group(function () {
    
    /* RESERVA */
    Route::get('/dashboard', [ReservaController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/store', [ReservaController::class, 'store'])->name('reserva.store');


    /* APARELHOS */
    Route::match(['get', 'post'], '/aparelhos', AparelhoController::class)->name('aparelhos.index');
    Route::get('/aparelhos/create', [AparelhoController::class, 'create'])->name('aparelhos.create');
    Route::post('/aparelhos/store', [AparelhoController::class, 'store'])->name('aparelhos.store');
    Route::get('/aparelhos/{id}', [AparelhoController::class, 'show'])->name('aparelhos.show');
    Route::get('/aparelhos/{id}/edit', [AparelhoController::class, 'edit'])->name('aparelhos.edit');
    Route::put('/aparelhos/{id}', [AparelhoController::class, 'update'])->name('aparelhos.update');
    Route::delete('/aparelhos/{id}', [AparelhoController::class, 'destroy'])->name('aparelhos.destroy');






    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
