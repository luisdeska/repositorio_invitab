<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class loginController extends Controller
{

    public function loginSession(Request $request): RedirectResponse
    { 

        $credentials = [
            "usuario" => $request->user,
            "password" => $request->password,
        ];

        

        if (Auth::attempt(['usuario' => $credentials['usuario'], 'password' => $credentials['password']])){
            $request->session()->regenerate();
            return redirect()->intended(route('viewIndex'));
        }else{
            return redirect()->route('viewLogin');
        }

    }

    public function registro(Request $request){

        $datosvalidados = $request->validate([
            'usuario' => 'required|unique:users',
            'nombre' => 'required',
            'apellido' => 'required',
            'password' =>'required',
        ]);

        $user = new User();
        $user->usuario= $datosvalidados['usuario'];
        $user->nombre = $datosvalidados['nombre'];
        $user->apellido = $datosvalidados['apellido'];
        $user->password= Hash::make($datosvalidados['password']);

        $user->save();

        Log::info('Usuario guardado');

        return redirect(route('index'));
    }

    public function cerrarSession(Request $request){
        Auth::logout();

        $request -> session()->invalidate();
        $request ->session()->regenerateToken();
        return redirect()->route("viewLogin");
    }
}
