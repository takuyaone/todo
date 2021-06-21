<?php

use Illuminate\Support\Facades\Route;

Route::get('/add', [App\Http\Controllers\TodoController::class, 'add']);
Route::post('/add', [App\Http\Controllers\TodoController::class, 'create']);
Route::get('/edit', [App\Http\Controllers\TodoController::class, 'edit']);
Route::post('/edit', [App\Http\Controllers\TodoController::class, 'update']);
Route::get('/delete', [App\Http\Controllers\TodoController::class, 'delete']);
Route::post('/delete', [App\Http\Controllers\TodoController::class, 'remove']);
