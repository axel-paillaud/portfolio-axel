<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;

Route::get('/', HomeController::class);

Route::put('/profile/intro', [ProfileController::class, 'update_intro'])->middleware('auth');
Route::put('/profile/presentation', [ProfileController::class, 'update_presentation'])->middleware('auth');

Route::put('/project/{id}', [ProjectController::class, 'update'])->middleware('auth');
Route::delete('/project/{id}', [ProjectController::class, 'delete'])->middleware('auth');
Route::post('/project', [ProjectController::class, 'store'])->middleware('auth');