<?php

namespace App\Providers\Repository;

use App\Domain\Repositories\DimensionRepositoryEloquent;
use App\Domain\Repositories\interfaces\DimensionRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class DimensionRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            DimensionRepositoryInterface::class,
            DimensionRepositoryEloquent::class
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
