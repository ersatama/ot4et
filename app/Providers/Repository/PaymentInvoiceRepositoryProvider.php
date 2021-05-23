<?php

namespace App\Providers\Repository;

use App\Domain\Repositories\interfaces\PaymentInvoiceRepositoryInterface;
use App\Domain\Repositories\PaymentInvoiceRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class PaymentInvoiceRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PaymentInvoiceRepositoryInterface::class,
            PaymentInvoiceRepositoryEloquent::class
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
