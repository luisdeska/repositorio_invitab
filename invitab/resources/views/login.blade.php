@extends('navbar')

@section('body')
        <div class="text-center row align-items-center justify-content-center vh-100 container-fluid">
            <form action="/index">
                <div>
                    <h1>INICIAR SESION</h1>
                    <h5 class="mt-4">Rellena los campos para iniciar sesion</h5>
                </div>
            <div>  
                <label for="email" class="form-label p-1">Correo eléctronico</label>
                <div><input class="form-control-sm" type="email" name="email" id="email"></div>
                
            </div>
            <div>
                <label for="pass" id="lbl" class="form-label p-1">Contraseña</label>
                <div><input class="form-control-sm" type="password" name="pass" id="pass"></div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-outline-dark">Entrar</button>
            </div>
            <div class="form-text">
                <p>Recuerda ingresar tus datos correctamente</p>
            </div>
            
        </form>

        </div>

