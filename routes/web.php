<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\GarantiaController;
use App\Http\Controllers\PrestamoController;

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


    # Configuraciones Usuarios
    Route::get('/configuraciones/usuarios', [UserController::class, 'index'])->name('user.index');
    Route::get('/configuraciones/usuarios/nuevo-usuario', [UserController::class, 'create'])->name('user.create');
    Route::post('/configuraciones/usuarios/guardar-usuario', [UserController::class, 'store'])->name('user.store');
    Route::get('/configuraciones/usuarios/{id}/editar-usuario', [UserController::class, 'edit'])->name('user.edit');
    Route::delete('/configuraciones/usuarios/{id}/eliminar-usuario', [UserController::class, 'destroy'])->name('user.destroy');


    # Configuraciones Garantias
    Route::get('/configuraciones/garantias', [GarantiaController::class, 'index'])->name('garantia.index');


    # Configuraciones Contratos
    Route::get('/configuraciones/contratos', [ContratoController::class, 'index'])->name('contrato.index');


    # Configuraciones Monedas
    Route::get('/configuraciones/moneda', [MonedaController::class, 'index'])->name('moneda.index');
    Route::get('/configuraciones/moneda/nueva-moneda', [MonedaController::class, 'create'])->name('moneda.create');
    Route::post('/configuraciones/moneda/guardar-moneda', [MonedaController::class, 'store'])->name('moneda.store');
    Route::get('/configuraciones/moneda', [MonedaController::class, 'index'])->name('moneda.index');


    # Prestamos
    Route::post('/prestamos/calcular', [PrestamoController::class, 'calculadora'])->name('prestamo.calcular');


    # Clientes
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');


});

require __DIR__.'/auth.php';
