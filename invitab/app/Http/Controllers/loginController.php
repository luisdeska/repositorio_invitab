<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        /*
        $user = User::where("usuario", $request->user)->first();
            if($user && ($request->password ==  $user->password)){
                
                    $request->session()->flush();
                    session([
                        "id" => $user["id"],
                        "nombre" => $user["nombre"],
                        "usuario" => $user["user"],
                        "apellido" => $user["apellido"],
                    ]);

                    $data= $request->session()->all();
                    return redirect()->route('viewIndex')->with('dataUser', $request->session()->all());
                
            }
            else{
                return redirect()->route("viewLogin");
            }
            */
    }

    public function registro(Request $request){

        $user = new User();
        $user->usuario= $request->user;
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->password= Hash::make($request->password);

        $user->save();

        Auth::login($user);
        return redirect(route('index'));

    }

    public function cerrarSession(Request $request){
        Auth::logout();

        $request -> session()->invalidate();
        $request ->session()->regenerateToken();
        return redirect()->route("viewLogin");
    }
}
