<?php

Route::get('/', 'HomeController@index')->name('home');

// Admin Group Routes...
Route::prefix('admin')->group(function() {
    // Auth Routes
    Auth::routes(['register' => false, 'verify' => false]);

    // Log viewer
    Route::get('/log-viewer', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('/logs', 'Admin\LogController@index')->name('admin.logs');

    // Dasboard Routes...
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    

    // Tags Routes...
    Route::post('/tags/create', 'Admin\TagController@store')->name('admin.tags.store');
    
    // Products Routes...
    Route::get('/products', 'Admin\ProductController@index')->name('admin.products');
    Route::get('/products/create', 'Admin\ProductController@create')->name('admin.products.create');
    Route::post('/products/create', 'Admin\ProductController@store')->name('admin.products.store');

    // Users Routes...
    Route::get('/users', 'Admin\UserController@index')->name('admin.users');
    
    // Admins Routes...
    Route::get('/user-admins', 'Admin\AdminController@index')->name('admins');
});
