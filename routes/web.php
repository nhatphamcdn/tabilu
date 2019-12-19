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

// Admin Group Routes...
Route::prefix('admin')->group(function() {
    // Auth Routes
    Auth::routes(['register' => false, 'verify' => false]);

    // Log viewer
    Route::get('/log-viewer', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('/logs', 'Admin\LogController@index')->name('admin.logs');

    // Dasboard Routes...
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    
    // Products Routes...
    Route::get('/products', 'Admin\ProductController@index')->name('admin.products');
    Route::get('/products/create', 'Admin\ProductController@create')->name('admin.products.create');
    Route::post('/products/create', 'Admin\ProductController@store')->name('admin.products.store');

    // Users Routes...
    Route::get('/users', 'Admin\UserController@index')->name('admin.users');
    
    // Admins Routes...
    Route::get('/user-admins', 'Admin\AdminController@index')->name('admins');
});
