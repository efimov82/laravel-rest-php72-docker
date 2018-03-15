<?php

// 'middleware' => 'web'
Route::group(['prefix' => 'rest-api/v1'], function () {
  // Articles
  Route::get('articles',              'RestApi\ArticleController@index');
  Route::get('articles/{article}',    'RestApi\ArticleController@details');
  Route::post('articles',             'RestApi\ArticleController@add');
  Route::put('articles/{article}',    'RestApi\ArticleController@update');
  Route::delete('articles/{article}', 'RestApi\ArticleController@delete');
  // Token
  Route::delete('token/request',      'RestApi\TokenController@request');
  Route::delete('token/refresh',      'RestApi\TokenController@refresh');
  Route::delete('token/delete',      'RestApi\TokenController@delete');
});


Route::group(['prefix' => 'rest-api/v1/videos', 'middleware' => 'rest_token'], function () {
  //Videos
  Route::get('/',                'RestApi\VideosController@index');
  Route::get('/{id}',           'RestApi\VideosController@details')->where('id', '\d+');
  Route::post('/',               'RestApi\VideosController@add');
  Route::put('/{id}',        'RestApi\VideosController@update')->where('id', '\d+');
  Route::delete('/{id}',     'RestApi\VideosController@delete')->where('id', '\d+');
});

// Users
Route::post('register',             'Auth\RegisterController@register');
