<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
oute::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);

use App\Http\Controllers\Detyra1Controller;
Route::get('/detyra1',[Detyra1Controller::class,'A']);
Route::post('/created',[Detyra1Controller::class,'B']);
Route::post('/edit/{id}',[Detyra1Controller::class,'C']);
Route::post('/updated',[Detyra1Controller::class,'D']);
Route::post('/read',[Detyra1Controller::class,'E']);