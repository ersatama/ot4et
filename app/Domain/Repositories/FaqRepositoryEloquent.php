<?php


namespace App\Domain\Repositories;

use App\Domain\Contracts\FaqContract;
use App\Domain\Repositories\interfaces\FaqRepositoryInterface;
use App\Models\Faq;

class FaqRepositoryEloquent implements FaqRepositoryInterface
{
    public function list() {
        return Faq::where(FaqContract::STATUS,FaqContract::ON)->get();
    }

    public function getById($id) {
        return Faq::where([
            [FaqContract::ID,$id],
            [FaqContract::STATUS,FaqContract::ON]
        ])->first();
    }
}