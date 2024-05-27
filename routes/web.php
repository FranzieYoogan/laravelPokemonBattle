<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/result', function () {
    return view('result');
});

Route::get('/', [Controller::class, 'getData']);

Route::post('/result', [Controller::class, 'sendData']);
