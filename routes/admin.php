<?php

use App\Http\Controllers\SymptomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiseaseController;


Route::middleware("auth")->group(function () {
  Route::group(["prefix" => "admin"], function () {
    Route::get('/', function () {
      return view('pages.dashboard.index');
    })->name('dashboard');
    Route::resource('/symptom', SymptomController::class);
    Route::resource('/disease', DiseaseController::class);
  });
});
