<?php

namespace App\Providers;

//classes
use App\Repository\Eloquent\ProductRepository;
//interfaces
use App\Repository\Interfaces\ProductRepositoryInterface;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        // App Repository
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
