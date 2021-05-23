<?php


namespace App\Domain\Repositories;

use App\Domain\Repositories\interfaces\ProductRepositoryInterface;
use App\Models\Product;
use App\Domain\Contracts\ProductContract;

class ProductRepositoryEloquent implements ProductRepositoryInterface
{
    public function find(int $id) {
        return Product::find($id);
    }

    public function getByOrganizationId($id) {
        return Product::where(ProductContract::ORGANIZATION_ID,$id)->get();
    }

    public function create($data) {
        return Product::create($data);
    }
}
