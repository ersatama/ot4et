<?php

namespace App\Http\Controllers\Api\Documents;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentInvoiceRequest;
use App\Http\Resources\PaymentInvoiceResource;
use App\Models\Organization;
use App\Models\PaymentInvoice;
use Illuminate\Http\Request;
use App\Domain\Contracts\PaymentInvoiceContract;
use App\Services\PaymentInvoiceService;

class PaymentInvoiceController extends Controller
{
    protected $paymentInvoiceService;

    public function __construct(PaymentInvoiceService $paymentInvoiceService) {
        $this->paymentInvoiceService    =   $paymentInvoiceService;
    }

    public function index(Request $request, Organization $organization)
    {
        $invoices   =   $this->paymentInvoiceService->getByOrganizationIdAndLikeDocumentNumber($request->all(),$organization->id);

        return response([
            PaymentInvoiceContract::INVOICES    =>  PaymentInvoiceResource::collection($invoices)
        ], 200);
    }

    public function store(StorePaymentInvoiceRequest $request)
    {
        return response([
            PaymentInvoiceContract::INVOICE =>  $this->paymentInvoiceService->create($request->all())
        ], 201);
    }
}
