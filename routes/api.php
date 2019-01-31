<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/sons/{grand_parents_id?}', 'ParentController@getSonsAjax')->name('sons');
