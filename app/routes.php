<?php

Route::get('/', array('as' => 'inicio', 'uses' => 'HomeController@getInicio'));
Route::get('/il-ristorante', array('as' => 'il-ristorante', 'uses' => 'HomeController@getIlRistorante'));
