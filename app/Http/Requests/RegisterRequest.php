<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Domain\Contracts\UserContract;

class RegisterRequest extends FormRequest
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
            UserContract::EMAIL     =>  'required|unique:users',
            UserContract::PASSWORD  =>  'required|min:8',
            UserContract::NAME      =>  'required',
            UserContract::IDENTIFICATION_NUMBER =>  'required|unique:users',
            UserContract::FIRST_NAME    =>  'required',
            UserContract::LAST_NAME =>  'required'
        ];
    }
}
