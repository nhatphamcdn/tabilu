<?php

namespace App\Providers;

use App\Constracts\ProductRepositoryInterface;
use App\Constracts\TagRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Repositories\TagRepository;
use Illuminate\Support\ServiceProvider;

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
        $this->app->singleton(TagRepositoryInterface::class, TagRepository::class);
    }
}
