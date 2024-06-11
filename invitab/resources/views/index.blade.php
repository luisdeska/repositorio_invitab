@extends('navbar')

@section('body')


<div class="container-fluid row align-items-center justify-content-center" style="margin-top: 60px;">
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
                <th>Area</th>
                <th>Fecha</th>
                <th>Responsable</th>
            </tr>
        </thead>
    <tbody id="tbody"></tbody>
</table>
</div>
</div>