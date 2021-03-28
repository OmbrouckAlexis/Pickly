<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\PhotoController;


Route::get('/', [FirstController::class, 'index'])->name('index');

Route::get('/search/{search}', [FirstController::class, 'search']);

Route::get('/img/{id}', [FirstController::class, 'img'])->where('id','[0-9]+');

Route::get('/user/{id}', [FirstController::class, 'user'])->where('id','[0-9]+');

Route::get('/jaime/{id}', [FirstController::class, 'like'])->middleware('auth')->where('id','[0-9]+');

Route::get('/changeLike/{id}', [FirstController::class, 'changeLike'])->middleware('auth')->where('id','[0-9]+');

Route::get('/suivre/{id}', [FirstController::class, 'suivre'])->middleware('auth')->where('id','[0-9]+');

Route::resource('songs', PhotoController::class)->only([
    'create', 'store', 'destroy'
]);

Auth::routes();