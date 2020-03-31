<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* 
 * Global Routes
 * Routes which are used globally
 */

Auth::routes();

/* Fallback - used for general errors such as 404 */
Route::fallback(function () {
    return '404';
});

/* 
 * Frontend Routes
 * Routes which are used by the frontend
 */

Route::group(['namespace' => 'Frontend', 'as' => 'frontend'], function () {
    RouteController::include_route_files(__DIR__ . '/frontend');
});

/* 
 * Backend Routes
 * Routes which are used by the backend
 */

Route::group(['namespace' => 'Backend', 'as' => 'Backend'], function () {
    RouteController::include_route_files(__DIR__ . '/backend');
});
