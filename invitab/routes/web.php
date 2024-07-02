<?php

use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

Route::controller(ViewsController::class)->group(function(){
    Route::get("/", "viewLogin")->name("viewLogin");
    Route::get("/index", "viewIndex")->name("viewIndex");
    Route::get("/cargar", "viewLoad");
    Route::get("/editar", "viewEdit");
    Route::get("/informacion", "viewVer");
    Route::get("/perfil", "viewProfile");
});

Route::controller(DocumentsController::class)->group(function(){
    Route::get("/getData", "getData");
    Route::post("/create", "createDocument");
    Route::put("/update", "updateDocument");
    Route::delete("/delete", "deleteDocument");
    Route::get("/find", "findById");
});

Route::controller(loginController::class)->group(function(){
    Route::post("/login", "loginSession")->name("login");
    Route::get("/cerrarSession", "cerrarSession")->name("cerrarSession");
});
