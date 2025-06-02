<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return post('home', TaskController::class);
// });

Route::get('/', [TaskController::class, 'index']); 

Route::resource('tasks', TaskController::class); 

Route::get('/tasks/{task}/statusupdate', [TaskController::class, 'statusupdate']);

