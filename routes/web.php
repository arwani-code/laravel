<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('about', [PageController::class, 'about']);
Route::get("gallery", [PageController::class, 'gallery']);
# user
Route::get('users', [UserController::class, 'index']);
Route::get('users/{user}', [UserController::class, 'show']);
#article
Route::get('articles/', [ArticleController::class, 'index']);
Route::get('articles/create', [ArticleController::class, 'create']);
Route::post('articles', [ArticleController::class, 'store']);
Route::get('articles/{id}', [ArticleController::class, 'show']);
Route::get('articles/{id}/edit', [ArticleController::class, 'edit']);
Route::put('articles/{id}', [ArticleController::class, 'update']);
