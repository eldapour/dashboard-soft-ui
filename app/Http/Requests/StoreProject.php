<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProject extends FormRequest
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
            'image'      => 'required|required_without:id|image',
            'service_id' => 'required|exists:services,id'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'يرجي رفع صورة او فيديو للمشروع'
        ];
    }
}
