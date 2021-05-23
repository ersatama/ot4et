<?php

namespace App\Http\Controllers\Api\Items;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceIndexRequest;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Resources\ServiceResource;
use App\Services\ServiceService;
use App\Domain\Contracts\ServiceContract;
use App\Models\Organization;
use App\Models\Service;


class ServiceController extends Controller
{
    protected $serviceService;
    public function __construct(ServiceService $serviceService) {
        $this->serviceService   =   $serviceService;
    }

    public function index(ServiceIndexRequest $request,Organization $organization)
    {
        return response([
            ServiceContract::SERVICES => ServiceResource::collection($this->serviceService->getByOrganizationId($organization->id))
        ],200);
    }

    public function store(ServiceStoreRequest $request)
    {
        return response([
            ServiceContract::SERVICE    =>  $this->serviceService->create($request->all())
        ],201);
    }
}
