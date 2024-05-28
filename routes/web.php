<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::resource('task', TaskController::class);


Route::get('/task', [TaskController::class, 'index']);
Route::get('/task/{task}', [TaskController::class, 'show']);
Route::get('/task-create', [TaskController::class, 'create']);
Route::post('/task', [TaskController::class, 'store']);
Route::get('/task/{task}/edit', [TaskController::class, 'edit']);
Route::patch('/task/{task}', [TaskController::class, 'update']);
Route::delete('/task/{task}', [TaskController::class, 'destroy']);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);