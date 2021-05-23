<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrganizationStoreRequest;
use App\Http\Resources\OrganizationResource;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Services\OrganizationService;
use App\Domain\Contracts\OrganizationContract;

class OrganizationController extends Controller
{
    protected $organizationService;
    public function __construct(OrganizationService $organizationService) {
        $this->organizationService  =   $organizationService;
    }

    public function store(OrganizationStoreRequest $request)
    {
        $organization = $this->organizationService->create($request->all());
        $request->user()->organizations()->attach($organization);
        return response([
            OrganizationContract::ORGANIZATION  =>  $organization
        ],200);
    }

    public function index(Request $request)
    {
        return OrganizationResource::collection($request->user()->organizations);
    }
}
