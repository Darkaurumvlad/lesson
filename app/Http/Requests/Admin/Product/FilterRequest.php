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
            'name' => 'string',
            'norm_azot' => 'numeric',
            'norm_fosfor' => 'numeric',
            'norm_kaliy' => 'numeric',
            'culture_id' => '',
            'district' => 'string',
            'price' => 'numeric',
            'description' => 'string',
            'function' => 'string',
        ];
    }
}
