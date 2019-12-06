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

define('ADMIN_CONTROLLER', 'Admin\AdminController');
define('ADMIN_CONTROLLER_DASHBOARD', 'Admin\DashboardController');
define('ADMIN_CONTROLLER_PRODUCT', 'Admin\ProductController');
define('ADMIN_CONTROLLER_USER', 'Admin\UserController');


// Admin Group Routes...
Route::prefix('admin')->group(function() {
    Auth::routes(['register' => false, 'verify' => false]);

    // Dasboard Routes...
    Route::get('/', ADMIN_CONTROLLER_DASHBOARD . '@index')->name('admin.dashboard');
    
    // Products Routes...
    Route::get('/products', ADMIN_CONTROLLER_PRODUCT . '@index')->name('admin.products');
    Route::get('/products/create', ADMIN_CONTROLLER_PRODUCT . '@create')->name('admin.products.create');

    // Users Routes...
    Route::get('/users', ADMIN_CONTROLLER_USER . '@index')->name('admin.users');
    
    // Admins Routes...
    Route::get('/user-admins', ADMIN_CONTROLLER . '@index')->name('admins');
});
