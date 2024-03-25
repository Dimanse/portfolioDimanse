<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contacto;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    //

    public function create(User $user)
    {
        // $usuario = User::find(auth()->user()->id);
        if(!auth()->user()){
            return redirect()->route('login');
        }

        $contactos = Contacto::all();
        if(!$contactos){
            return redirect()->route('curriculum.index');
        }
        // dd($usuario);
        // dd('Mostrando formulario');
        return view('contacto.create', [
            'contactos' => $contactos,
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
         Contacto::create([
             'name' => $request->name,
             'email' => $request->email,
             'asunto' => $request->asunto,
             'mensaje' => $request->mensaje,
             'token' => Str::uuid(),
         ]);

         return back()->with('mensaje', 'Mensaje enviado  correctamente');

    }

    public function show(Contacto $contacto)
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
            'contacto' => $contacto,
            // 'usuario' => $usuario,
        ]);
    }

    public function destroy(Contacto $contacto)
    {
        // dd($contacto);
        $contacto->delete();

        return redirect()->route('contacto.show');
    }
}
