<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('Home'));
Route::get("/about", fn() => view("About"));
Route::get("/gallery", fn() => view("Gallery"));

Route::get('users', [UserController::class, 'index']);
