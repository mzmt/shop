<?php

use Illuminate\Support\Facades\Route;

// Web routes
Route::prefix('api')->group(function() {
    Route::resource(
        'items',
        'Api\ItemController',
        ['only' => ['index', 'show']]
    );
});

// CSM routes
Route::prefix('admin')->group(function() {
    Route::resource(
        'items',
        'Admin\ItemController',
        ['only' => ['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']]
    );
});

// top
Route::get('/', function () {
    return view('welcome');
});
