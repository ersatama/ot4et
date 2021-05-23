<?php


namespace App\Domain\Repositories;

use App\Domain\Repositories\interfaces\NewsRepositoryInterface;
use App\Models\News;
use App\Domain\Contracts\NewsContract;

class NewsRepositoryEloquent implements NewsRepositoryInterface
{
    public function get() {
        return News::orderBy(NewsContract::ID,NewsContract::DESC)->paginate(9);;
    }
}
