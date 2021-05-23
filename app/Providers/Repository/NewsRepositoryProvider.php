<?php

namespace App\Providers\Repository;

use App\Domain\Repositories\interfaces\NewsRepositoryInterface;
use App\Domain\Repositories\NewsRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class NewsRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            NewsRepositoryInterface::class,
            NewsRepositoryEloquent::class
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
