<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);\\
        return [
            'user_id'=> $this->user_id,
            'address'=> $this->address,
            'phone'=> $this->phone,
            'payment_method'=> $this->payment_method,
            'status'=> $this->status,
            'carts' => CartResource::collection($this->cart)
            
        ];
    }
}
