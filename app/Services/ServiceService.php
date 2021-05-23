<?php


namespace App\Services;

use App\Domain\Repositories\interfaces\ServiceRepositoryInterface;

class ServiceService
{
    protected $serviceRepository;
    public function __construct(ServiceRepositoryInterface $serviceRepository) {
        $this->serviceRepository    =   $serviceRepository;
    }

    public function getByOrganizationId(int $id) {
        return $this->serviceRepository->getByOrganizationId($id);
    }

    public function create($data) {
        return $this->serviceRepository->create($data);
    }
}
