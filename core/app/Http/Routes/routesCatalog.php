<?php

Route::get('/', array(
    'as' => 'index',
    'uses' => 'CatalogController@index',
));

//-------AUTH---------
Route::get('/login', array(
    'as' => 'login',
    'uses' => 'AuthController@login',
));

Route::post('/login', array(
    'as' => 'login-post',
    'uses' => 'AuthController@loginPost',
));

Route::get('/logout', array(
    'as' => 'logout',
    'uses' => 'AuthController@logout',
));
//-------/AUTH---------