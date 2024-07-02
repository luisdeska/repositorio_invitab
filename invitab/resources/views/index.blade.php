@extends('navbar')

@section('body')


<div class="container-fluid row align-items-center justify-content-center" style="margin-top: 100px;">
<div class="container-fluid row justify-content-center" style="width: 800px">
	<form>
    <input class="form-control" data-table="table_id" type="text" 
    placeholder="Buscar un trabajo">
    </form>
</div>
<div class="container-fluid mt-4 row justify-content-center">
<table class="table align-items-center" style="width: 900px;">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre del documento</th>
                <th>Descripción</th>
                <th>Sección</th>
                <th>Serie</th>
                <th>Area</th>
                <th>Expediente</th>
                <th>Año</th>
                <th>Sección especifica</th>
                <th>Sección común</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <tr>
                <td>1</td>
                <td><a style="text-decoration: none; color: inherit;" href="/informacion">Documento 1</a></td>
                <td>Informatica</td>
                <td>17/06/2024</td>
                <td>Persona 1</td>
            </tr>
        </tbody>
</table>
</div>
</div>