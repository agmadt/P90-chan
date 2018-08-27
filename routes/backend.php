<?php


Route::group(['prefix' => 'backend'], function () {

	Route::get('/login', ['uses' => 'LoginController@showLoginForm'])->name('login');
	Route::post('/login', ['uses' => 'LoginController@login']);
	Route::get('/logout', ['uses' => 'LoginController@logout'])->name('logout');

	Route::get('/', ['uses' => 'NewsController@index'])->name('backend.dashboard');

	Route::group(['prefix' => '/news', 'as' => 'news.'], function () {
		Route::get('/', 'NewsController@index')->name('index');
		Route::get('news/create', 'NewsController@create')->name('create');
		Route::post('news', 'NewsController@store')->name('store');
		Route::get('news/{news}', 'NewsController@show')->name('show');
		Route::get('news/{news}/edit', 'NewsController@edit')->name('edit');
		Route::put('news/{news}', 'NewsController@update')->name('update');
		Route::delete('news/{news}', 'NewsController@destroy')->name('destroy');
	});

	Route::group(['prefix' => '/slider', 'as' => 'slider.'], function () {
		Route::get('/', 'SliderController@index')->name('index');
		Route::get('/create', 'SliderController@create')->name('create');
		Route::get('/edit/{id}', 'SliderController@edit')->name('edit');
		Route::post('/edit/{id}', 'SliderController@update')->name('update');

		Route::post('/create', 'SliderController@store')->name('store');
		Route::post('/destroy/{id}', 'SliderController@destroy')->name('destroy');
	});

	Route::group(['prefix' => '/photo', 'as' => 'photo.'], function () {
		Route::get('/', 'PhotoController@index')->name('index');
	});

	Route::group(['prefix' => '/staff', 'as' => 'staff.'], function () {
		Route::get('/', 'StaffController@index')->name('index');
	});

	Route::group(['prefix' => '/bank', 'as' => 'bank.'], function () {
		Route::get('/', 'BankController@index')->name('index');
	});

	Route::group(['prefix' => '/inquiry', 'as' => 'inquiry.'], function () {
		Route::get('/', 'InquiryController@index')->name('index');
	});

	Route::group(['prefix' => '/setting', 'as' => 'setting.'], function () {
		Route::get('/', 'SettingController@index')->name('homepage');
	});
});
