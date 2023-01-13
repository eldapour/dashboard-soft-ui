<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSite extends FormRequest
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
            "site_type"          => 'required|exists:site_types,id',
            "title"              => 'required|max:255',
            "country"            => 'required|array',
            "url"                => 'required',
            "total_clicks_limit" => 'required|numeric|min:1|gte:daily_clicks_limit',
            "daily_clicks_limit" => 'required|numeric|min:1',
            "points_for_click"   => 'required|numeric|min:5|max:50',
        ];
    }

//    public function messages(){
//        ''
//    }
}
