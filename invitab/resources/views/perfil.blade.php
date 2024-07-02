@extends('navbar')
@section('body')

<div class="container perfil" style="margin-top: 100px;">

    <div class="row">
        <div class="col-sm-2">
            <img src="" alt="" height="100px">
        </div>
        <div class="col-sm-10">
            <h3>Nombre de usuario</h3>
        </div>
    </div>

</div>
<div class="container formulario">
    
        <div class="col-sm-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="" readonly> 
            </div>        
        </div>
        <div class="col-sm-6">
        <a href="editUser"><button type="submit" class="btn btn-outline-secondary mb-3">Editar</button></a>
        </div>
        <div class="col-sm-6">
            <a href="cerrarSesion"><button class="btn btn-outline-warning">Cerrar sesión</button></a>
        </div>
</div>


@endsection