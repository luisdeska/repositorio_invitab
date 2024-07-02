@extends('navbar')
@section('body')

<div class="container-fluid row" style="margin-top: 100px; margin-right: 0px; margin-left: 0px;">
    <div class="col-2">

        <div class="">
            <a href="/index" role="button" class="btn btn-outline-secondary"><i class="bi bi-caret-left-fill"></i>Volver</a>
        </div>

        <div class="mb-3 mt-3">
        <label for="name" class="form-label">Fondo</label>
        <input class="form-control" id="name" value="Invitab" readonly></input>
        </div>

        <div class="mb-3">
          <label for="select-menu" class="form-label">Sección común</label>
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
          <label for="secciones-sust" class="form-label">Sección sustantiva</label>
          <select class="form-select" id="secciones-sust" aria-label="Default select example">
              <option selected></option>
              <option value="1">SECCION SUSTANTIVA 1</option>
              <option value="2">SECCION SUSTANTIVA 2</option>
              <option value="3">SECCION SUSTANTIVA 3</option>
              <option value="4">SECCION SUSTANTIVA 4</option>
          </select>
      </div>

        <div class="mb-3">
        <label for="serie" class="form-label">Serie</label>
        <select class="form-select" id="serie" aria-label="Default select example">
          <option selected></option>
          <option value="1">Serie 1</option>
          <option value="2">Serie 2</option>
          <option value="3">Serie 3</option>
          <option value="4">Serie 4</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="area" class="form-label">Área</label>
        <select class="form-select" id="area">
          <option selected></option>
          <option value="1">Área 1</option>
          <option value="2">Área 2</option>
          <option value="3">Área 3</option>
          <option value="4">Área 4</option>
        </select>
        </div>

        <div class="mb-3">
          <label for="expediente" class="form-label">Expediente</label>
          <input class="form-control" id="expediente"></input>
        </div>

        <div class="mb-3">
          <label for="year" class="form-label">Año</label>
          <input type="date" class="form-control" id="year"></input>
        </div>

        
        
        <div class="mb-3">
        <label for="nota" class="form-label">Nota</label>
        <input class="form-control" id="nota"></input>
        </div>

        <div class="d-grid gap-2 col-10 mx-auto mt-4">
            <button type="button" class="btn btn-outline-success">
                <i class="bi bi-check-lg"></i> Guardar documento
            </button>
            <a href="/index" type="button" class="btn btn-outline-danger">
                <i class="bi bi-x-lg"></i> Cancelar
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
