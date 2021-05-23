<?php

namespace App\Providers\Repository;

use App\Domain\Repositories\interfaces\FaqRepositoryInterface;
use App\Domain\Repositories\FaqRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class FaqRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            FaqRepositoryInterface::class,
            FaqRepositoryEloquent::class
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
