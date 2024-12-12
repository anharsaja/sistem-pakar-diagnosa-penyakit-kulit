<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=> '/patient'], function () {
    Route::get('/diagnosa', function () {
        return view('welcome');
    })->name('diagnosa');
    Route::get('/hasil', function () {
        return view('welcome');
    })->name('hasil');
});