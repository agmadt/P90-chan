<?php


Route::get('/', 'HomeController@index')->name('index');
Route::get('/search', 'HomeController@search')->name('search');

Route::get('/page', 'PageController@about');
Route::get('/page/about', 'PageController@about')->name('about');
Route::get('/page/donation', 'PageController@donation')->name('donation');
Route::get('/page/contact-us', 'PageController@contactUs')->name('contact-us');
Route::get('/page/galeries', 'PageController@galleries')->name('galleries');

Route::post('/page/contact-us', 'PageController@storeContact');

Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/{slug}', 'NewsController@index');