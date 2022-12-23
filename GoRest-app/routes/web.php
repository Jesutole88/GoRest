<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\UsuariosController;

Route::get('/',[UsuariosController::class,'index'])->name('usuarios.index');
Route::get('/usuario',[UsuariosController::class,'create']);
Route::post('/usuario',[UsuariosController::class,'store'])->name('usuario.store');
Route::get('/usuario/delete/{id}',[UsuariosController::class,'destroy'])->name('usuario.destroy');
