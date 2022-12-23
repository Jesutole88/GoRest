<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Auth;

Route::get('/',[UsuariosController::class,'index'])->name('usuarios.index');
Route::get('/usuario',[UsuariosController::class,'create']);
Route::post('/usuario/store',[UsuariosController::class,'store'])->name('usuario.store');
Route::get('/usuario/delete/{id}',[UsuariosController::class,'delete'])->name('usuario.delete');
Route::get('/usuario/modificar/{id}',[UsuariosController::class,'modificar'])->name('usuario.modificar');
Route::post('/usuario',[UsuariosController::class,'update'])->name('usuario.update');

Route::get('/usuario/getuser',[UsuariosController::class,'getuser'])->name('usuario.getuser');
Route::post('/usuario/getusername',[UsuariosController::class,'getusername'])->name('usuario.getusername');

Route::get('/usuario/getmail',[UsuariosController::class,'getmail'])->name('usuario.getmail');
Route::post('/usuario/getusermail',[UsuariosController::class,'getusermail'])->name('usuario.getusermail');


// Route::get('/usuario/nombre',[UsuariosController::class,'nombre'])->name('usuario.nombre');
// Route::post('/usuario/nombre',[UsuariosController::class,'getNombre'])->name('usuario.getNombre');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
