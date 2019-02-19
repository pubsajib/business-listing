<?php
Auth::routes();
Route::get('/', 'PagesController@home')->name('home');
Route::get('/home', 'PagesController@home')->name('home');
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
Route::resource('listings', 'ListingsController');