<?php

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@login')->middleware('auth');

// Admin Routes
Route::get('admin/services', 'AdminController@services')->middleware('auth');
Route::get('admin/add-service', 'AdminController@addService')->middleware('auth');
Route::post('admin/add-service', 'AdminController@insertService')->middleware('auth');
Route::get('admin/delete-service/{id}', 'AdminController@deleteService')->middleware('auth');

Route::get('/admin/profile', 'AdminController@profile')->middleware('auth');
Route::post('/admin/profile', 'AdminController@profileUpdate')->middleware('auth');
Route::get('/admin/change-password', 'AdminController@changePassword')->middleware('auth');
Route::post('/admin/change-password', 'AdminController@changePasswordUpdate')->middleware('auth');

Route::get('admin/settings', 'AdminController@settings')->middleware('auth');
Route::post('admin/settings', 'AdminController@insertSettings')->middleware('auth');

Route::get('admin/contact', 'AdminController@contacts')->middleware('auth');

// Frontend
Route::get('/', 'NormalController@homepage');
Route::get('/contact', 'NormalController@contact');
Route::post('/contact', 'NormalController@insertContact');
Route::get('/about', 'NormalController@about');
