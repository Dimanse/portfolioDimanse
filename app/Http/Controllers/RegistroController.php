<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    //
    public function index()
    {
        return view('registro.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make( $request->password ),
            'admin' => $request->email === 'domingocurbeira@gmail.com' ? '1' : '0',
            'url' => Str::uuid(),
            'confirmado' => '1',
        ]);

        // Otra forma de autenticar
        auth()->attempt($request->only('email', 'password'));


        // Redireccionar
        return redirect()->route('curriculum.index', auth()->user()->url );
    }
}
