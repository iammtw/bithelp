<?php

Auth::routes(['register' => false]);
Route::get('/', function () {return view('index');});
Route::get('/admin', 'AdminController@login')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
