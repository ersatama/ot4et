<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerStoreRequest;
use App\Http\Resources\PartnerResource;
use App\Models\Organization;
use App\Services\PartnerService;

class PartnerController extends Controller
{
    protected $partnerService;
    public function __construct(PartnerService $partnerService) {
        $this->partnerService   =   $partnerService;
    }

    public function index(Organization $organization)
    {
        return PartnerResource::collection($organization->partners);
    }

    public function store(PartnerStoreRequest $request)
    {
        return new PartnerResource($this->partnerService->create($request->all()));
    }
}
