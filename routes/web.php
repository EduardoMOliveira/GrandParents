<?php

Route::get('/', function () {

    return view('welcome');
});


Route::get('/grand-parents', 'GrandParentsController@index')->name('grand-parents');