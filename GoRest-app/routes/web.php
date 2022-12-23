<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\UsuariosController;

Route::get('/',[UsuariosController::class,'index'])->name('usuarios.index');
Route::get('/usuario',[UsuariosController::class,'create']);
Route::post('/usuario/store',[UsuariosController::class,'store'])->name('usuario.store');
Route::get('/usuario/delete/{id}',[UsuariosController::class,'delete'])->name('usuario.delete');
Route::get('/usuario/modificar/{id}',[UsuariosController::class,'modificar'])->name('usuario.modificar');
Route::post('/usuario',[UsuariosController::class,'update'])->name('usuario.update');
