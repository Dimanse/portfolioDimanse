<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    //
    public function index()
    {
        return view(' actualizar.index');
    }

    public function store(Request $request, User $user)
    {
        //  $request->validate([
        //      'new_password' => 'required|min:6',
        //      'confirm_password' => 'required|min:6',

        //  ]);

        //  $usuario = User::all();

        //  if ($request->input('new_password')=== $request->input('confirm_password')) {
        //      $usuario->password = Hash::make($request->new_password);
        //     //  dd($usuario->password);
        //          $usuario->save();
        //          return redirect()->route('login');
        //         }else{
        //             return back()->with('mensaje', 'Contraseñas no coinciden');
        //         }

                // Redireccionar a su muro
            }
        }
