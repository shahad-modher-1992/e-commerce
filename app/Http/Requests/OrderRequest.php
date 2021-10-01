<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'user_id'=> 'required',
            'phone'=>'required',
            'status'=>'required',
            'payment_method'=>'required',
            'address'=>'required',
            // 'carts'=>'required|array',
            // 'qty'=> Rule::exists('carts','quantity'),
        ];
    }
}
