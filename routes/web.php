<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CurriculumController;


Route::get('/', [CurriculumController::class, 'index'])->name('curriculum.index');
Route::post('/', [CurriculumController::class, 'store'])->name('correo.store');

Route::get('/registro', [RegistroController::class, 'index'])->name('registro.index');
Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/actualizar-password', [PasswordController::class , 'index'])->name('actualizar.index');
Route::post('/actualizar-password', [PasswordController::class , 'store'])->name('actualizar.store');

Route::get('/version', [PdfController::class, 'index'])->name('curriculum.version');

Route::get('/contacto', [ContactoController::class, 'create'])->name('contacto.create');

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');
Route::get('/{correo:token}', [ContactoController::class, 'show'])->name('contacto.show');
Route::delete('/contacto/{correo:token}', [ContactoController::class, 'destroy'])->name('contacto.destroy');



