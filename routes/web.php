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

Route::get('/', function () {
    return view('welcome');
});

// CSM routes
Route::prefix('admin')->group(function() {
    Route::resource(
        'items',
        'Admin\ItemController',
        ['only' => ['index', 'show', 'create', 'edit', 'update', 'destroy']]
    );
});
