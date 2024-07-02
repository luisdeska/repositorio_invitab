<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo_documento',
        'descripcion',
        'fondo',
        'seccion',
        'serie',
        'area',
        'expediente',
        'año',
        'seccion_especifica',
        'seccion_comun',
        'inmueble',
        'mueble',
        'posicion',
        'observaciones'
    ];
}
