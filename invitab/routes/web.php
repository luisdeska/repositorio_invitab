<?php

use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

Route::controller(ViewsController::class)->group(function(){
    Route::get("/", "viewLogin")->name("viewLogin");
    Route::get("/index", "viewIndex")->middleware("auth")->name("viewIndex");
    Route::get("/cargar", "viewLoad")->middleware("auth");
    Route::get("/editar", "viewEdit")->middleware("auth");
    Route::get("/informacion", "viewVer")->middleware("auth");
    Route::get("/perfil", "viewProfile")->middleware("auth");
    Route::get("/registrar", "viewRegister")->middleware("auth");
});

Route::controller(DocumentsController::class)->group(function(){
    Route::get("/getData", "getData");
    Route::post("/create", "createDocument");
    Route::put("/update", "updateDocument");
    Route::delete("/delete", "deleteDocument");
    Route::get("/find", "findById");
});

Route::controller(loginController::class)->group(function(){
    Route::post("/validatelogin", "loginSession")->name("validatelogin");
    Route::get("/cerrarSession", "cerrarSession")->name("cerrarSession");
    Route::post("/registro", "registro")->name('registro');
});
