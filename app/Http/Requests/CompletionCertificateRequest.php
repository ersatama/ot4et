<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Domain\Contracts\CompletionCertificateContract;

class CompletionCertificateRequest extends FormRequest
{
    /**
     * @var mixed
     */
    private $basket;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            CompletionCertificateContract::DATE_OF_CONSTRUCTING =>  'required',
            CompletionCertificateContract::ORDER_NUMBER =>  'required',
            'basket.*' => 'required',
            'basket.*.is_product' => 'required',
            'basket.*.id' => 'required',
            CompletionCertificateContract::CURRENCY_ID  =>  'required|exists:currencies,id',
            CompletionCertificateContract::DOCUMENT_NUMBER  =>  'required',

        ];
    }
}
