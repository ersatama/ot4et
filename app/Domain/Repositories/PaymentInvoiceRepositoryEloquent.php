<?php


namespace App\Domain\Repositories;

use App\Domain\Repositories\interfaces\PaymentInvoiceRepositoryInterface;
use App\Models\PaymentInvoice;
use app\Domain\Contracts\PaymentInvoiceContract;

class PaymentInvoiceRepositoryEloquent implements PaymentInvoiceRepositoryInterface
{
    public function getByOrganizationIdAndLikeDocumentNumber($request, int $id) {
        return PaymentInvoice::where(function ($query) use ($request) {
            if (array_key_exists(PaymentInvoiceContract::SEARCH,$request)) {
                $query->where(PaymentInvoiceContract::DOCUMENT_NUMBER, 'LIKE', '%' . $request[PaymentInvoiceContract::SEARCH] . '%');
            }
            if (array_key_exists(PaymentInvoiceContract::SORT_TYPE,$request) && array_key_exists(PaymentInvoiceContract::SORT_VALUE,$request)) {
                $query->orderBy($request[PaymentInvoiceContract::SORT_TYPE],$request[PaymentInvoiceContract::SORT_VALUE]);
            }
        })->where(PaymentInvoiceContract::ORGANIZATION_ID, $id)->paginate(12);
    }

    public function create($data) {
        return PaymentInvoice::create($data);
    }
}
