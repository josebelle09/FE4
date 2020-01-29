<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::any('josebelle-exercise-1', 'Exercise1');
Route::any('josebelle-exercise-2', 'Exercise2');
Route::any('josebelle-exercise-3', 'Exercise3@index');
Route::any('josebelle-exercise-3/store', 'Exercise3@store');
Route::any('josebelle-exercise-final', 'ExerciseFinal@login');
Route::any('josebelle-exercise-final/store', 'ExerciseFinal@store');
