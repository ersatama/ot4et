<?php

namespace App\Providers\Repository;

use App\Domain\Repositories\interfaces\PartnerRepositoryInterface;
use App\Domain\Repositories\PartnerRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class PartnerRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PartnerRepositoryInterface::class,
            PartnerRepositoryEloquent::class
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
