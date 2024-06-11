<?php

use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

Route::controller(ViewsController::class)->group(function(){
    Route::get("/", "viewLogin");
    Route::get("/index", "viewIndex");
});
