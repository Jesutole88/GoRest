<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class UsuariosController extends Controller
{
    public function index(){

        $url = env('URL_SERVER_API','https://gorest.co.in/');
        $response = Http::get($url.'/users');
        $data = $response->json();
        return view('usuarios',compact('data'));
        // return view('usuarios');
    }
}
