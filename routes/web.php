<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\TodoController::class, 'index']);
Route::post('/todo/create', [App\Http\Controllers\TodoController::class, 'create']);
Route::post('/todo/update', [App\Http\Controllers\TodoController::class, 'update']);
Route::post('/todo/delete', [App\Http\Controllers\TodoController::class, 'delete']);
