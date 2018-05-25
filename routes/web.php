<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web', 'auth']], function () {
	// Route::get('/admin', 'Backend\AdminsController@index')->name('admin.index');
	Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
		Route::get('news', 'Backend\NewsController@index')->name('news.index');
		Route::get('news/create', 'Backend\NewsController@create')->name('news.create');
		Route::post('news', 'Backend\NewsController@store')->name('news.store');
		Route::get('news/{news}', 'Backend\NewsController@show')->name('news.show');
		Route::get('news/{news}/edit', 'Backend\NewsController@edit')->name('news.edit');
		Route::put('news/{news}', 'Backend\NewsController@update')->name('news.update');
		Route::delete('news/{news}', 'Backend\NewsController@destroy')->name('news.destroy');
	});
});