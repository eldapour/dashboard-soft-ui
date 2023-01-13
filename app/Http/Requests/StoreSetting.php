<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSetting extends FormRequest
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
            'about_ar'          => 'required',
            'about_en'          => 'required',
            'privacy_ar'        => 'required',
            'privacy_en'        => 'required',
            'terms_ar'          => 'required',
            'terms_en'          => 'required',

        ];
    }

    public function messages()
    {
        return [
            'about_ar.required'                 => 'يجب ادخال هذا الحقل',
            'about_en.required'                 => 'يجب ادخال هذا الحقل',
            'privacy_ar.required'               => 'يجب ادخال هذا الحقل',
            'privacy_en.required'               => 'يجب ادخال هذا الحقل',
            'terms_ar.required'                 => 'يجب ادخال هذا الحقل',
            'terms_en.required'                 => 'يجب ادخال هذا الحقل',
        ];
    }
}
