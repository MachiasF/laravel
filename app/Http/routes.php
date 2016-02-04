<?php

	//Front end

	Route::get('/', 'PagesController@home');

	Route::get('contact', 'PagesController@contact');

	Route::get('about', 'PagesController@about');



	Route::group(['middleware' => 'web'], function () {

		Route::get('articles', 'ArticlesController@index');

		Route::get('articles/create', 'ArticlesController@create');

		Route::get('articles/{id}', 'ArticlesController@show');

		Route::post('articles', 'ArticlesController@store');
		
	});



