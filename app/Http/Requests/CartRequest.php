<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
       $rules = [
            'id' => 'required|numeric',
            'name'    =>['required',
            Rule::exists('products','name')->where(function ($query) {
                $query->where('id', $this->id);
            })
        ],
            'sale_price'    =>['required',
            Rule::exists('products','sale_price')->where(function ($query) {
                $query->where('id', $this->id);
            })
        ],
            'regular_price'    =>['required',
            Rule::exists('products','regular_price')->where(function ($query) {
                $query->where('id', $this->id);
            })
        ],
            'quantity'    =>['required',
            Rule::exists('products','quantity')->where(function ($query) {
                $query->where('id', $this->id);
            })
        ],
            'image'    =>['required',
            Rule::exists('products','image')->where(function ($query) {
                $query->where('id', $this->id);
            })
        ],
            'product_id'    =>['required',
            Rule::exists('products','id')->where(function ($query) {
                $query->where('id', $this->id);
            })
        ],
        'tax'=>'required|numeric',
        'total' => 'required|numeric',
            'user_id'=> 'required|numeric',
        ];

        return $rules;
    }
}
