<?php


namespace App\Domain\Repositories;

use App\Domain\Repositories\interfaces\FrequentlyAskedQuestionRepositoryInterface;
use App\Models\FrequentlyAskedQuestion;
use App\Domain\Contracts\FrequentlyAskedQuestionContract;

class FrequentlyAskedQuestionRepositoryEloquent implements FrequentlyAskedQuestionRepositoryInterface
{
    public function get() {
        return FrequentlyAskedQuestion::get();
    }
}
