<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;


Route::get('/index', [PostController::class, 'index']);
Route::post('/store', [PostController::class, 'store']);
Route::delete('/delete', [PostController::class, 'delete']);
Route::put('/update', [PostController::class, 'update']);
Route::patch('/patch', [PostController::class, 'patch']);



