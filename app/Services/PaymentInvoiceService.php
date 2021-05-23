<?php


namespace App\Services;

use App\Domain\Repositories\interfaces\PaymentInvoiceRepositoryInterface;

class PaymentInvoiceService
{
    protected $paymentInvoiceRepository;
    public function __construct(PaymentInvoiceRepositoryInterface $paymentInvoiceRepository) {
        $this->paymentInvoiceRepository =   $paymentInvoiceRepository;
    }

    public function getByOrganizationIdAndLikeDocumentNumber($request, int $id) {
        return $this->paymentInvoiceRepository->getByOrganizationIdAndLikeDocumentNumber($request,$id);
    }

    public function create($data) {
        return $this->paymentInvoiceRepository->create($data);
    }
}
