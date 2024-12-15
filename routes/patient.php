<?php

use App\Http\Controllers\DiagnoseController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=> '/patient'], function () {
    Route::get('/diagnosa', [DiagnoseController::class, 'index'])->name('diagnosa');
    Route::post('/diagnosa', [DiagnoseController::class, 'diagnosa'])->name('diagnosa');
    Route::get('/hasil', [DiagnoseController::class, 'result'])->name('hasil');
});