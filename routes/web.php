<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmstrongController;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [ArmstrongController::class, 'index'])->name('index');
Route::post('/check', [ArmstrongController::class, 'check'])->name('check');
Route::get('/result', [ArmstrongController::class, 'result'])->name('result');