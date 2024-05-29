<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

/*
（コメント部分は省略）
*/

Route::get('/', [TasksController::class, 'index']);
Route::resource('tasks', TasksController::class);