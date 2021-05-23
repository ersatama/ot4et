<?php


namespace App\Services;

use App\Domain\Repositories\interfaces\ProductRepositoryInterface;

class ProductService
{
    protected $productRepository;
    public function __construct(ProductRepositoryInterface $productRepository) {
        $this->productRepository    =   $productRepository;
    }

    public function getByOrganizationId(int $id) {
        return $this->productRepository->getByOrganizationId($id);
    }

    public function create($data) {
        return $this->productRepository->create($data);
    }
}
