<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/parentes/{grandparent_id?}', 'ParentController@getParent');

Route::post('/filhos', 'SonParentController@getSon');

