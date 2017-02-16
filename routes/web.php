<?php
Route::auth();
Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LoginController@destroy');