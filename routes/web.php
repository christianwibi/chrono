<?php

Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/categories', 'PageController@categories')->name('categories');
Route::get('/referrals', 'PageController@referrals')->name('referrals');
Route::get('/articles', 'PageController@articles')->name('articles');
Route::get('/article/{id}', 'ArticleController@article');
Route::get('/category/{category}', 'SearchController@category');
Route::post('/search', 'SearchController@search');
Route::post('/email', 'EmailController@contactme');

//default
Route::post('/login', 'LoginController@doLogin');
Route::get('/logout', 'LoginController@doLogout')->name('logout');
