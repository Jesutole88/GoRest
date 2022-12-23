<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Exception;
use Illuminate\Support\Facades\Session;

class UsuariosController extends Controller
{
    public function index(){

        try{

            $url = 'https://gorest.co.in/public/v2';
            $response = Http::get($url.'/users');
            $data = $response->json();
            return view('usuarios',compact('data'));

        } catch (Exception $e) {

            return $this->error($e);

        }

    }

    public function create(){
        return view('usuario_crear');
    }

    public function store(Request $request){

        try {

            $url = 'https://gorest.co.in/public/v2';
            $response = Http::withToken('f4b1c26aed24de66232605674c51c6f3539c704cc4274ccc5c9883a82a450de7')->post($url.'/users',[
                "name"=> $request->name,
                "email"=> $request->email,
                "gender"=> $request->gender,
                "status"=> $request->status
            ]);

        } catch (Exception $e) {

            return $this->error($e);

        }

        return redirect()->route('usuarios.index');
    }

    public function error($e){

        $message = $e->getMessage();
        $code = $e->getCode();       
        //$string = $e->__toString(); 
        $texto = "Error con API URL";
        
        $data = [
            "mensaje"=>$message,
            "codigo"=>$code,
            "texto"=>$texto
        ];

        return view('usuario_error',compact('data'));

    }

    public function delete($idUser){
        try {

            $url = 'https://gorest.co.in/public/v2';
            $response = Http::withToken('f4b1c26aed24de66232605674c51c6f3539c704cc4274ccc5c9883a82a450de7')->delete($url.'/users/'.$idUser);

        } catch (Exception $e) {

            return $this->error($e);

        }
        return redirect()->route('usuarios.index');
    }

    public function modificar($idUser){

        try{

            $url = 'https://gorest.co.in/public/v2';
            $response = Http::get($url.'/users/'.$idUser);
            $data = $response->json();
            return view('usuario_modificar', compact('data'));


        } catch (Exception $e) {

            return $this->error($e);

        }


    }


    public function update(Request $request){

        try{

            $url = 'https://gorest.co.in/public/v2';
            $response = Http::withToken('f4b1c26aed24de66232605674c51c6f3539c704cc4274ccc5c9883a82a450de7')->put($url.'/users/'.$request->id, [
                "name"=> $request->name,
                "email"=> $request->email,
                "gender"=> $request->gender,
                "status"=> $request->status
            ]);


        } catch (Exception $e) {

            return $this->error($e);

        }

        return redirect()->route('usuarios.index');

    }

    public function getuser(){

        return view('usuario_buscar');

    }


    public function getusername(Request $request){

        try{

            $url = 'https://gorest.co.in/public/v2';
            $response = Http::withToken('f4b1c26aed24de66232605674c51c6f3539c704cc4274ccc5c9883a82a450de7')->get($url.'/users?name='.$request->name);
            $data = $response->json();
            return view('usuarios',compact('data'));


        } catch (Exception $e) {

            return $this->error($e);

        }

        return view('usuario_name',compact('data'));

    }

    public function getmail(){

        return view('usuario_mail');

    }


    public function getusermail(Request $request){

        try{

            $url = 'https://gorest.co.in/public/v2';
            $response = Http::withToken('f4b1c26aed24de66232605674c51c6f3539c704cc4274ccc5c9883a82a450de7')->get($url.'/users?email='.$request->email);
            $data = $response->json();
            return view('usuarios',compact('data'));


        } catch (Exception $e) {

            return $this->error($e);

        }

        return view('usuario_name',compact('data'));

    }
}
