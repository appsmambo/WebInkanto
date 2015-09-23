<?php

Route::get('/', array('as' => 'inicio', 'uses' => 'HomeController@getInicio'));
Route::get('/il-ristorante', array('as' => 'inicio', 'uses' => 'HomeController@getIlRistorante'));
