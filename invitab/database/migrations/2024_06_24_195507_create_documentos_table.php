<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_documento');
            $table->string('descripcion');
            $table->string('fondo');
            $table->string('seccion');
            $table->string('serie');
            $table->string('area');
            $table->string('expediente');
            $table->date('año');
            $table->string('seccion_especifica');
            $table->string('seccion_comun');
            $table->string('inmueble');
            $table->string('mueble');
            $table->string('posicion');
            $table->string('observaciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
