<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});

