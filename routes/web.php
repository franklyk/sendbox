<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/task', [TaskController::class, 'index']);
Route::get('/task{task}', [TaskController::class, 'show']);
Route::get('/task/create', [TaskController::class, 'create']);
Route::post('/task{task}', [TaskController::class, 'store']);
Route::get('/task{task}/edit', [TaskController::class, 'edit']);
Route::patch('/task{task}', [TaskController::class, 'update']);
Route::delete('/task{task}', [TaskController::class, 'destroy']);