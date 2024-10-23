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
Route::middleware('auth')->group(function () {
    Route::get('/barberia', [FormularioController::class, 'index'])->name('formulario.index');
    Route::get('/formulario', [FormularioController::class, 'create'])->name('formulario.create');
    Route::post('/formulario/data', [FormularioController::class, 'store'])->name('formulario.store');
    Route::get('/nosotros', [FormularioController::class, 'nosotros'])->name('formulario.nosotros');
    Route::get('/servicios', [FormularioController::class, 'servicios'])->name('formulario.servicios');
});


Route::get('/',[loginController::class,'index'])->name('login.index');
Route::post('/register',[loginController::class,'register'])->name('register.store');
Route::get('/register',[loginController::class,'createUser'])->name('register.index');
Route::post('/login/register',[loginController::class,'login'])->name('login.store');
Route::get('/logout',[loginController::class,'logout'])->name('logout');
