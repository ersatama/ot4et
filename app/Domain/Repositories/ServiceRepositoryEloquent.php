<?php


namespace App\Domain\Repositories;

use App\Domain\Repositories\interfaces\ServiceRepositoryInterface;
use App\Models\Service;
use App\Domain\Contracts\ServiceContract;

class ServiceRepositoryEloquent implements ServiceRepositoryInterface
{
    public function find(int $id) {
        return Service::find($id);
    }

    public function getByOrganizationId(int $id) {
        return Service::where(ServiceContract::ORGANIZATION_ID,$id)->get();
    }

    public function create($data) {
        return Service::create($data);
    }
}
