@extends('navbar')
@section('body')

<div class="container-fluid row" style="margin-top: 100px; margin-right: 0px; margin-left: 0px;">
    <div class="col-2">

        <div class="">
            <a href="/index" role="button" class="btn btn-outline-secondary"><i class="bi bi-caret-left-fill"></i>Volver</a>
        </div>

        <div class="mb-3">
        <label for="name" class="form-label">Nombre del documento</label>
        <input class="form-control" id="name" readonly></input>
        </div>

        <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input class="form-control" id="descripcion"readonly></input>
        </div>

        <div class="mb-3">
        <label for="date" class="form-label">Fecha de subida</label>
        <input class="form-control" id="date" readonly></input>
        </div>

        <div class="mb-3">
        <label for="responsable" class="form-label">Responsable</label>
        <input class="form-control" id="responsable" readonly></input>
        </div>

        <div class="mb-3">
        <label for="select-menu">Sección común</label>
        <input class="form-control" id="secciones-comunes" aria-label="Default select example"readonly></input>
        </div>

        <div class="mb-3">
            <label for="secciones-sust">Sección sustantiva</label>
            <input class="form-control" id="secciones-sust"readonly></input>
        </div>

        <div class="mb-3">
        <label for="nota" class="form-label">Nota</label>
        <input class="form-control" id="nota" readonly></input>
        </div>

        <div class="d-grid gap-2 col-10 mx-auto mt-4">
            <button type="button" class="btn btn-outline-primary">
                <i class="bi bi-file-earmark-arrow-down-fill"></i> Descargar documento
            </button>
            <a href="/editar" type="button" class="btn btn-outline-secondary">
                <i class="bi bi-pencil-square"></i> Editar información
            </a>
            

            <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">¡¡AVISO!!</h1>
                      
                    </div>
                    <div class="modal-body">
                      Eliminar este documento es una acción permanente, ¿continuar?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalCerrar">Eliminar</button>
                    </div>
                  </div>
                </div>
            </div>

            <div class="modal fade" id="modalCerrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">AVISO</h1>
                      
                    </div>
                    <div class="modal-body">
                      Documento eliminado correctamente
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-2"></div>

    <div class="col-7">
    <h3>Vista previa del documento</h3>

    <div class="mt-3">
        <img src="{{ asset('img/muestra.jpg') }}"  alt="">
    </div>


    </div>

    <div class="col-1"></div>

</div>