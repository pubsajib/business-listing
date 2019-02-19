<?php
Auth::routes();
Route::get('/', 'PagesController@home')->name('home');
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');