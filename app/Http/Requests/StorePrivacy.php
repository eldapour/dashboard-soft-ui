<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePrivacy extends FormRequest
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
              'privacy_ar'        => 'required',
              'privacy_en'        => 'required',

        ];
    }

    public function messages()
    {
        return [
            'privacy_ar.required'               => 'يجب ادخال هذا الحقل',
            'privacy_en.required'               => 'يجب ادخال هذا الحقل',


        ];
    }
}
