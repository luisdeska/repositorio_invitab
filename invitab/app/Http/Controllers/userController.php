<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class userController extends Controller
{
    public function updateUser(Request $request){
        $user = Auth::user();

        $datos = $request->validate([
            'usuario' =>'required|unique:users',
            'nombre' =>'required',
            'apellido' =>'required'
        ]);
        $user->usuario = $datos['usuario'];
        $user->nombre = $datos['nombre'];
        $user->apellido = $datos['apellido'];
        $user->save();

        $request->session()->put('usuario', $user->usuario);
        $request->session()->put('nombre', $user->nombre);
        $request->session()->put('apellido', $user->apellido);

        return redirect(route('perfil'));
    }
}
