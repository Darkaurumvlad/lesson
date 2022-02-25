<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
            'name' => '',
            'norm_azot' => '',
            'norm_fosfor' => '',
            'norm_kaliy' => '',
            'culture_id' => '',
            'district' => '',
            'price' => '',
            'description' => '',
            'function' => '',
            'sort' => '',
        ];
    }
}
