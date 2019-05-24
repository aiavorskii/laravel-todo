<?php

Route::group(['middleware' => ['web']], function () {
    // Auth
    Route::auth();

    // Homepage
    Route::get('/', 'HomeController@index')->name('homepage');

    // Resources
    Route::resource('todo', 'TodoController');
    Route::resource('todo-list', 'TodoController');

    // Administration page
    Route::group(['as' => 'admin::', 'prefix' => 'admin'], function () {
        Route::get('dashboard', ['as' => 'dashboard', function () {
            return 'hey there this is admin section';
        }]);
    });
});
