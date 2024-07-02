<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{

    function loginSession(Request $request){
        $request->validate([
            "user" => "required",
            "password" => "required"
        ]);

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
    }

    function cerrarSession(Request $request){
        $request->session()->all();
        $request -> session()->flush();
        return redirect()->route("viewLogin");
    }
}
