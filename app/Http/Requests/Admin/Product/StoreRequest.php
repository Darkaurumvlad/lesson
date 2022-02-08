<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'norm_azot' => 'required|numeric',
            'norm_fosfor' => 'required|numeric',
            'norm_kaliy' => 'required|numeric',
            'culture_id' => 'required',
            'district' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'function' => 'required|string',
        ];
    }
}
