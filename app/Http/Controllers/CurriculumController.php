<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mensaje;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    //
    public function index(Request $request)
    {

        // if(auth()->user() !== null){
        //     $usuario = User::find(auth()->user()->id);
        // }
        // dd($usuario);
        return view('curriculum.index', [

        ]);
    }


}
