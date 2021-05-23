<?php

namespace App\Http\Controllers\Api\Documents;

use App\Domain\Contracts\CompletionCertificateContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompletionCertificateIndexRequest;
use App\Http\Requests\CompletionCertificateRequest;
use App\Http\Resources\CompletionCertificateResource;
use App\Models\CompletionCertificate;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Services\CompletionCertificateService;

class CompletionCertificateController extends Controller
{
    private $completionCertificateService;

    public function __construct(CompletionCertificateService $completionCertificateService)
    {
        $this->completionCertificateService = $completionCertificateService;
    }

    public function index(Request $request,Organization $organization)
    {

        $certificates   =   $this->completionCertificateService->getByOrganizationIdAndLikeDocumentNumber($request->all(),$organization->id);
        return response([
            CompletionCertificateContract::CERTIFICATES =>  CompletionCertificateResource::collection($certificates)
        ],200);
    }

    public function store(CompletionCertificateRequest $request)
    {
        $data   =   $request->only(CompletionCertificateContract::DOCUMENT_NUMBER,
            CompletionCertificateContract::ORDER_NUMBER,
            CompletionCertificateContract::SUM,
            CompletionCertificateContract::ORGANIZATION_ID,
            CompletionCertificateContract::CURRENCY_ID);

        $data[CompletionCertificateContract::SUM]       =   $this->completionCertificateService->total($request->basket);
        $data[CompletionCertificateContract::USER_ID]   =   $request->user()->id;

        return response([
            CompletionCertificateContract::CERTIFICATE  =>  $this->completionCertificateService->create($data)
        ],201);

    }

}
