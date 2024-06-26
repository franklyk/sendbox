<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TaskController;
use App\Jobs\TranslateJob;
use App\Models\Task;
use Illuminate\Support\Facades\Route;


Route::get('/test', function () {

    $job = Task::first();

   TranslateJob::dispatch($job);

    return 'Done';
});



Route::view('/', 'home');

Route::get('/task', [TaskController::class, 'index']);
Route::get('/task-create', [TaskController::class, 'create']);
Route::post('/task', [TaskController::class, 'store'])->middleware('auth');
Route::get('/task/{task}', [TaskController::class, 'show']);


// Route::get('/task/{task}/edit', [TaskController::class, 'edit'])->middleware(['auth', 'can:edit-task,task']);
Route::get('/task/{task}/edit', [TaskController::class, 'edit'])
    ->middleware('auth')

    // ->can('edit-task', 'task'); desta forma utiliza-se o Gate método
    ->can('edit', 'task'); //desta forma utilizamos políticas (policies/TaskPolicy)


Route::patch('/task/{task}', [TaskController::class, 'update']);
Route::delete('/task/{task}', [TaskController::class, 'destroy']);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);
