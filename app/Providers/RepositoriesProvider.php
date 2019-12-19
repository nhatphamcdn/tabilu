<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Constracts\ProductRepositoryInterface;
use App\Repositories\ProductRepository;

class RepositoriesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
    }
}
