<?php

use Illuminate\Support\Facades\Route;

// Web routes
Route::prefix('api')->group(function() {
    Route::resource(
        'items',
        'Api\ItemsController',
        ['only' => ['index', 'show']]
    );
});

// CSM routes
Route::prefix('admin')->group(function() {
    Route::resource(
        'items',
        'Admin\ItemsController'
    );
});

// top
Route::get('/', function () {
    return view('welcome');
});
