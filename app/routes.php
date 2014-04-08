<?php

Route::get('/', 'LikeController@index');
Route::post('/like', 'LikeController@like');
Route::post('/unlike', 'LikeController@unlike');
