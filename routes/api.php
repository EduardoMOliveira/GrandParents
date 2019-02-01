<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/parents/{grand_parents_id?}', 'ParentController@getParentsAjax')->name('parents');
