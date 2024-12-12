<?php

use App\Http\Controllers\SymptomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiseaseController;


Route::middleware("auth")->group(function () {
  Route::group(["prefix" => "admin"], function () {
    Route::get('/', function () {
      return view('welcome');
    })->name('dashboard');
    Route::get('/symptom', function () {
      return view('welcome');
    })->name('symptom');
    Route::resource('/symptom', SymptomController::class);
    Route::resource('/disease', DiseaseController::class);
  });
});
