<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::redirect('/',"/tests");
Route::resource('tests',TestController::class);
