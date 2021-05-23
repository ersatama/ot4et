<?php

namespace App\Providers\Repository;

use App\Domain\Repositories\CompletionCertificateRepositoryEloquent;
use App\Domain\Repositories\interfaces\CompletionCertificateRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class CompletionCertificateRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CompletionCertificateRepositoryInterface::class,
            CompletionCertificateRepositoryEloquent::class
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
