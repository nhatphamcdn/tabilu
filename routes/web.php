<?php

Route::get('/', 'HomeController@index')->name('home');

// Admin Group Routes...
Route::prefix('admin')->group(function () {
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
    Route::get('/products/{id}/edit', 'Admin\ProductController@edit')->name('admin.products.edit');
    Route::post('/products/{id}/edit', 'Admin\ProductController@update')->name('admin.products.update');
    Route::post('/products/{id}/delete', 'Admin\ProductController@destroy')->name('admin.products.delete');
    Route::post('/products/{id}/force-delete', 'Admin\ProductController@delete')->name('admin.products.forceDelete');
    Route::get('/products/{id}/restores', 'Admin\ProductController@restore')->name('admin.products.restore');

    // Users Routes...
    Route::get('/users', 'Admin\UserController@index')->name('admin.users');

    // Admins Routes...
    Route::get('/user-admins', 'Admin\AdminController@index')->name('admins');
});
