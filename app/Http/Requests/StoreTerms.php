<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTerms extends FormRequest
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

            'terms_ar'          => 'required',
            'terms_en'          => 'required',

        ];
    }

    public function messages()
    {
        return [
            'terms_ar.required'                 => 'يجب ادخال هذا الحقل',
            'terms_en.required'                 => 'يجب ادخال هذا الحقل',
        ];
    }
}
