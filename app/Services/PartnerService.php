<?php


namespace App\Services;

use App\Domain\Repositories\interfaces\PartnerRepositoryInterface;

class PartnerService
{
    protected $partnerRepository;
    public function __construct(PartnerRepositoryInterface $partnerRepository) {
        $this->partnerRepository    =   $partnerRepository;
    }

    public function create($data) {
        return $this->partnerRepository->create($data);
    }
}
