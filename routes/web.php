<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\GarantiaController;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/configuraciones/usuarios', [UserController::class, 'index'])->name('user.index');


    Route::get('/configuraciones/garantias', [GarantiaController::class, 'index'])->name('garantia.index');


    Route::get('/configuraciones/contratos', [ContratoController::class, 'index'])->name('contrato.index');


    Route::get('/configuraciones/moneda', [MonedaController::class, 'index'])->name('moneda.index');
});

require __DIR__.'/auth.php';
