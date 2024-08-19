<?php

use App\Http\Controllers\TittleController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});



Route::resource('titles', TittleController::class);
