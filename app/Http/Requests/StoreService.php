<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreService extends FormRequest
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
            'icon'          => 'required_without:id',
            'title_ar'      => 'required|max:255',
            'title_en'      => 'required|max:255',
            'desc_ar'       => 'required',
            'desc_en'       => 'required',
        ];
    }

    public function messages()
    {
        return [
            'icon.required_without'      => 'يرجي اختيار الأيقونة',
            'title_ar.required'          => 'يجب ادخال العنوان باللغة العربية',
            'title_en.required'          => 'يجب ادخال العنوان باللغة الانجليزية',
            'desc_ar.required'           => 'يجب ادخال وصف باللغة العربية',
            'desc_en.required'           => 'يجب ادخال وصف باللغة الانجليزية',
        ];

    }
}
