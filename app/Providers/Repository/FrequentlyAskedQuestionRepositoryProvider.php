<?php

namespace App\Providers\Repository;

use App\Domain\Repositories\FrequentlyAskedQuestionRepositoryEloquent;
use App\Domain\Repositories\interfaces\FrequentlyAskedQuestionRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class FrequentlyAskedQuestionRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            FrequentlyAskedQuestionRepositoryInterface::class,
            FrequentlyAskedQuestionRepositoryEloquent::class
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
