<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');

define('ADMIN_CONTROLLER_BASE', 'Admin\AdminController');


// Admin Routes...
Route::prefix('admin')->group(function() {
    Auth::routes(['register' => false, 'verify' => false]);

    // Dasboard Routes...
    Route::get('/', ADMIN_CONTROLLER_BASE . '@index')->name('admin.dashboard');
});
