<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/articles/index', [TaskController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [TaskController::class, 'creatTask']);
Route::get('/articles/store', [TaskController::class, 'store'])->name('articles.store');
Route::post('/articles/store', [TaskController::class, 'store'])->name('articles.store');
Route::get('/articles/edit/{id}', [TaskController::class, 'editTask'])->name('articles.edit');
Route::put('/articles/edit/{id}', [TaskController::class, 'updateTask'])->name('articles.update');
Route::get('/articles/delet/{id}', [TaskController::class, 'deletTask'])->name('articles.delet');

