<?php


namespace App\Services;

use App\Domain\Repositories\interfaces\DimensionRepositoryInterface;

class DimensionService
{
    protected $dimensionRepository;
    public function __construct(DimensionRepositoryInterface $dimensionRepository) {
        $this->dimensionRepository  =   $dimensionRepository;
    }
}
