<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/sons/{grand_parents_id?}', 'SonController@index')->name('sons');
