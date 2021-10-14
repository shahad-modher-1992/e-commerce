<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=> 'required|string|max:255',
            'short_desc'=>'required|string|max:400',
            'desc'=> 'required|string|max:255',
            'regular_price'=>'required|numeric',
            'sale_price'=>'required|numeric',
            // 'stock_state'=> 'required|string',
            'featured'=> 'required|boolean',
            'quantity'=> 'required|integer',
            'catigory_id' => 'required',
            'image' => 'nullable|image',
            'tax' => 'required|array',
            'Dimensions'=>'nullable',
            'size'=>'nullable',
            'brand_id'=>'required',
            'color_id'=>'string|nullable',
            'weight'=>'string|nullable'
        ];
    }
}
