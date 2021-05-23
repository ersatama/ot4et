<?php

namespace App\Http\Controllers\Api\Items;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductIndexRequest;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Resources\ProductResource;
use App\Models\Dimension;
use App\Models\Organization;
use App\Services\ProductService;
use App\Domain\Contracts\ProductContract;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService) {
        $this->productService   =   $productService;
    }

    public function index(ProductIndexRequest $request,Organization $organization)
    {
        return response([
            ProductContract::PRODUCTS   =>  ProductResource::collection($this->productService->getByOrganizationId($organization->id))]);
    }

    public function store(ProductStoreRequest $request)
    {
        return response([
            ProductContract::PRODUCT    =>  $this->productService->create($request->all())
        ],201);
    }

    public function dimensions()
    {
        return response([ProductContract::DIMENSIONS => Dimension::get()],200);
    }
}
