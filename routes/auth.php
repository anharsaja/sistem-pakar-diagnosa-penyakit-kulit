<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::get("/login", [AuthController::class,"index"])->name("login");
Route::post("/login", [AuthController::class,"login"])->name("login");
Route::post("/logout", [AuthController::class,"logout"])->name( "logout");