<?php


namespace App\Domain\Repositories;

use App\Domain\Repositories\interfaces\PartnerRepositoryInterface;
use App\Models\Partner;
use App\Domain\Contracts\PartnerContract;

class PartnerRepositoryEloquent implements PartnerRepositoryInterface
{
    public function create($data) {
        return Partner::create($data);
    }
}
