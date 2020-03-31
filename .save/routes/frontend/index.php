<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index')->name('frontend_index');
Route::get('/home', 'HomeController@index')->name('home');
