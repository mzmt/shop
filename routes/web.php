<?php
use Illuminate\Support\Facades\Route;

// Web routes
Route::resource('items', 'ItemController', ['only' => ['index', 'show']]);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
// CSM routes
// Route::namespace('admin')->group(function() {
// });
