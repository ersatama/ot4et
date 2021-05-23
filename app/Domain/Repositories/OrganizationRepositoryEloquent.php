<?php


namespace App\Domain\Repositories;

use App\Domain\Repositories\interfaces\OrganizationRepositoryInterface;
use App\Models\Organization;

class OrganizationRepositoryEloquent implements OrganizationRepositoryInterface
{
    public function create($data) {
        return Organization::create($data);
    }
}
