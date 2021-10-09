<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);\
        return [
            'user_id'=> $this->user_id,
            'product_id'=> $this->product_id,
            'name'=> $this->name,
            'tax'=> $this->tax,
            'regular_price'=> $this->regular_price,
            'sale_price'=> $this->sale_price,
            'quantity'=> $this->quantity,
            'total'=> $this->total,
            'image'=> $this->image,
        ];

    }
}
