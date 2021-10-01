<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'name' => 'required',
            'sale_price' => 'required',
            'stock_state' => 'required',
            'regular_price'=> 'required',
            'quantity' => 'required',
            'total' => 'required',
            'image' => 'required,'
        ];
    }
}
