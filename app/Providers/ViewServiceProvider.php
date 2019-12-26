<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Http\View\Composers\TagComposer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            ['products._partials.form'],
            TagComposer::class
        );
    }
}
