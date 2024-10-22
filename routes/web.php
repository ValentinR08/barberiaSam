<?php

use App\Http\Controllers\FormularioController;
use App\Http\Controllers\loginController;
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
Route::get('/', [FormularioController::class, 'index'])->name('formulario.index');
Route::get('/formulario', [FormularioController::class, 'create'])->name('formulario.create');
Route::post('/formulario/data', [FormularioController::class, 'store'])->name('formulario.store');
Route::get('/nosotros', [FormularioController::class, 'nosotros'])->name('formulario.nosotros');
Route::get('/servicios', [FormularioController::class, 'servicios'])->name('formulario.servicios');
Route::get('/login',[loginController::class,'index'])->name('login.index');

