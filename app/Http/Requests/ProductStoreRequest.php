<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Domain\Contracts\ProductContract;

class ProductStoreRequest extends FormRequest
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
            ProductContract::NAME   =>  'required',
            ProductContract::BARCODE    =>  'required|unique:products,barcode',
            ProductContract::DIMENSION_ID   =>  'required|exists:dimensions,id',
            ProductContract::PRICE  =>  'numeric|required',
            ProductContract::TOTAL_AMOUNT   =>  'numeric|required',
            ProductContract::BRAND  =>  'nullable',
            ProductContract::COLOR  =>  'nullable',
            ProductContract::ORGANIZATION_ID    =>  'required|exists:organizations,id',
        ];
    }
}
