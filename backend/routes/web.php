<?php

use App\Http\Controllers\DiaController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view('welcome');
});
Route::post("/api/dias", [DiaController::class, "store"])->name("dias.store");
Route::get("/api/dias/{inicio?}/{termino?}", [DiaController::class, "show"])->name("dias.show");
