<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    function viewLogin(){
        return view('login',["titulo"=>"Inicio de Sesion"]);
    }

    function viewIndex(){
        return view('index',['titulo'=>'INVITAB | INICIO']);
    }
}
