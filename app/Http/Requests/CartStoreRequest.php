<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CartStoreRequest extends FormRequest
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
            'count' => 'required|min:1',
            //'product_id' => 'required|unique:carts, product_id,' . $this->cart->product_id,
            'product_id' =>  ['required', Rule::unique('carts')->ignore($this->cart)]
        ];
    }
}
