<?php


Route::group(['prefix' => 'backend'], function () {

	Route::get('login', ['uses' => 'LoginController@showLoginForm'])->name('login');
	Route::post('login', ['uses' => 'LoginController@authenticate']);
	Route::post('logout', ['uses' => 'LoginController@logout'])->name('logout');

	Route::group(['prefix' => '/news', 'as' => 'news.'], function () {
		Route::get('/', 'NewsController@index')->name('index');
		Route::get('news/create', 'NewsController@create')->name('create');
		Route::post('news', 'NewsController@store')->name('store');
		Route::get('news/{news}', 'NewsController@show')->name('show');
		Route::get('news/{news}/edit', 'NewsController@edit')->name('edit');
		Route::put('news/{news}', 'NewsController@update')->name('update');
		Route::delete('news/{news}', 'NewsController@destroy')->name('destroy');
	});
});
