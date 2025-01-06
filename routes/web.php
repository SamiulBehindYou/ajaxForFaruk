<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('index');
});

Route::get('get/data', [DataController::class, 'get_data'])->name('get.data');
