<?php


namespace App\Services;

use App\Domain\Repositories\interfaces\OrganizationRepositoryInterface;

class OrganizationService
{
    protected $organizationRepository;
    public function __construct(OrganizationRepositoryInterface $organizationRepository) {
        $this->organizationRepository   =   $organizationRepository;
    }

    public function create($data) {
        return $this->organizationRepository->create($data);
    }
}
