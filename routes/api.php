<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/parentes/{grandparent_id?}', 'ParentController@getTeste');

// Route::post('/parentes/{grandparent_id?}', function(){

//     dd('123jfkljsfkdljksdljkl');
// });


Route::post('/teste/{grandparent_id?}', function () {

    dd('123');
});