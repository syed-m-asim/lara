<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('form');
});

Route::post('/subission',[FormController::class, 'store']);
Route::get('/dataget',[FormController::class, 'index']);


