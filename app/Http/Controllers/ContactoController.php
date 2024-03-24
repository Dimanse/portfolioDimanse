<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Correo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //


    public function create(User $user)
    {
        // $usuario = User::find(auth()->user()->id);
        if(!auth()->user()){
            return redirect()->route('login');
        }

        $correos = Correo::all();
        // dd($usuario);
        // dd('Mostrando formulario');
        return view('contacto.create', [
            'correos' => $correos,
            // 'usuario' => $usuario,
        ]);
    }

    public function store(Request $request)
    {



        // validamos que todos los campos del foprmulario se rellenen por el usuario
         $request->validate([
             'name' => 'required',
             'email' => 'required|email',
             'asunto' => 'required',
             'mensaje' => 'required',
         ]);

         // Guardamos cada uno de los campos del formulario en la base de datos
         Correo::create([
             'name' => $request->name,
             'email' => $request->email,
             'asunto' => $request->asunto,
             'mensaje' => $request->mensaje,
             'token' => Str::uuid(),
         ]);

         return back()->with('mensaje', 'Mensaje enviado  correctamente');

    }

    public function show(Correo $correo)
    {

        // dd(auth()->user());
        if(auth()->user() === null){
            return redirect()->route('curriculum.index');
        }
        // $usuario = User::find(auth()->user()->id);
        // dd($usuario);
        // if($usuario->admin !== '1'){
        //     return redirect()->route('curriculum.index');
        // }
        return view('contacto.show', [
            'correo' => $correo,
            // 'usuario' => $usuario,
        ]);
    }

    public function destroy(Correo $correo)
    {
        // dd($correo);
        $correo->delete();

        return redirect()->route('contacto.create');
    }
}
