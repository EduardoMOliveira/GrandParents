<?php

Route::get('/', function () {

    return view('welcome');
});


Route::get('/grandparent', 'GrandParentController@index')->name('grandparent');

