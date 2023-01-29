<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('Home'));
Route::get("/about", fn() => view("About"));
Route::get("/gallery", fn() => view("Gallery"));
Route::get("users", function () {
    $users = [
        // [
        //     'name' => 'Irsyad A. Panjaitan',
        //     'phone' => '038382382323',
        //     'twitter' => 'irsyadadl',
        // ],
        // [
        //     'name' => 'James',
        //     'phone' => '01293824',
        //     'twitter' => 'jamesm',
        // ],
        // [
        //     'name' => 'Steve Schoger',
        //     'phone' => '3292393223',
        //     'twitter' => 'steveschoger',
        // ],
    ];

    return view("users.index", [
        'users' => $users,
    ]);
});
