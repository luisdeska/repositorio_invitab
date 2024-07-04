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

    function viewLoad(){
        return view('cargarArchivo', ['titulo'=>'INVITAB | CARGAR ARCHIVO']);
    }

    function viewEdit(){
        return view('editarArchivo', ['titulo'=>'INVITAB | EDITAR ARCHIVO']);
    }
    
    function viewVer(){
        return view('verArchivo', ['titulo'=>'INVITAB | VER ARCHIVO']);
    }

    function viewProfile(){
        return view('perfil', ['titulo'=>'INVITAB | Perfil']);
    }

    function viewRegister(){
        return view('registrarUser', ['titulo' => 'INVITAB | Registro']);
    }
}
