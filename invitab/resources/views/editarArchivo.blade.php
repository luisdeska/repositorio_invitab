@extends('navbar')
@section('body')

<div class="container-fluid row" style="margin-top: 100px; margin-right: 0px; margin-left: 0px;">
    <div class="col-2">

        <div class="">
        <a href="/informacion" role="button" class="btn btn-outline-secondary"><i class="bi bi-caret-left-fill"></i>Volver</a>
        </div>

        <div class="mb-3">
        <label for="name" class="form-label">Nombre del documento</label>
        <input class="form-control" id="name" ></input>
        </div>

        <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input class="form-control" id="descripcion"></input>
        </div>

        <div class="mb-3">
        <label for="date" class="form-label">Fecha de subida</label>
        <input class="form-control" id="date"></input>
        </div>

        <div class="mb-3">
        <label for="responsable" class="form-label">Responsable</label>
        <input class="form-control" id="responsable"></input>
        </div>

        <div class="mb-3">
        <label for="select-menu">Sección común</label>
        <select class="form-select" id="secciones-comunes" aria-label="Default select example">
            <option selected></option>
            <option value="1">LEGISLACIÓN</option>
            <option value="2">ASUNTOS JURÍDICOS</option>
            <option value="3">PROGRAMACIÓN, ORGANIZACIÓN Y PRESUPUESTACIÓN</option>
            <option value="4">RECURSOS HUMANOS</option>
            <option value="5">RECURSOS FINANCIEROS</option>
            <option value="6">RECURSOS MATERIALES</option>
            <option value="7">SERVICIOS GENERALES</option>
            <option value="8">TECNOLOGIA Y SERVICIOS DE LA INFORMACIÓN</option>
            <option value="9">COMUNICACIÓN SOCIAL</option>
            <option value="10">CONTROL Y AUDITORÍA DE ACTIVIDADES PÚBLICAS</option>
            <option value="11">PLANEACIÓN, INFORMACIÓN, EVALUACIÓN Y POLÍTICAS</option>
            <option value="12">TRANSPARENCIA Y ACCESO A LA INFORMACIÓN</option>
        </select>
        </div>

        <div class="mb-3">
            <label for="secciones-sust">Sección sustantiva</label>
            <select class="form-select" id="secciones-sust">
                <option selected></option>
                <option value="1">SECCION SUSTANTIVA 1</option>
                <option value="2">SECCION SUSTANTIVA 2</option>
                <option value="3">SECCION SUSTANTIVA 3</option>
                <option value="4">SECCION SUSTANTIVA 4</option>
            </select>
        </div>

        <div class="mb-3">
        <label for="nota" class="form-label">Nota</label>
        <input class="form-control" id="nota"></input>
        </div>

        <div class="d-grid gap-2 col-10 mx-auto mt-4">
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalGuardar">
                <i class="bi bi-pencil-square"></i> Guardar cambios
            </button>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">
                <i class="bi bi-trash3-fill"></i> Eliminar documento
            </button>

            <div class="modal fade" id="modalDelete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

            <div class="modal fade" id="modalGuardar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">AVISO</h1>
                      
                    </div>
                    <div class="modal-body">
                      Documento actualizado
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-bs-dismiss="modal">Aceptar</button>
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
                      <a role="button" href="/index" class="btn btn-success">Cerrar</a>
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



