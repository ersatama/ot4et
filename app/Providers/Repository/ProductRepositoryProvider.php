<?php

namespace App\Providers\Repository;

use App\Domain\Repositories\interfaces\ProductRepositoryInterface;
use App\Domain\Repositories\ProductRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class ProductRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepositoryEloquent::class
        );
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
