<?php

Route::get('/', array('as' => 'inicio', 'uses' => 'HomeController@getInicio'));
Route::get('/il-ristorante', array('as' => 'il-ristorante', 'uses' => 'HomeController@getIlRistorante'));
Route::get('/la-cucina-peruviana', array('as' => 'il-ristorante', 'uses' => 'HomeController@getLaCucina'));
Route::get('/il-menu', array('as' => 'il-menu', 'uses' => 'HomeController@getIlMenu'));
Route::get('/gallery', array('as' => 'gallery', 'uses' => 'HomeController@getGallery'));
Route::get('/prenota', array('as' => 'prenota', 'uses' => 'HomeController@getPreNota'));
Route::get('/contatti', array('as' => 'contatti', 'uses' => 'HomeController@getContatti'));
