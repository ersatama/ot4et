<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Domain\Contracts\PaymentInvoiceContract;

class StorePaymentInvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            PaymentInvoiceContract::PARTNER_ID  =>  'required|exists:partners,id',
            PaymentInvoiceContract::DEAL    =>  'required|numeric',
            PaymentInvoiceContract::AMOUNT  =>  'required|numeric',
            PaymentInvoiceContract::DATE    =>  'required'
        ];
    }
}
