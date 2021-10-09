<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name' => $this->name,
            'size' => $this->size,
            'Dimensions' => $this->Dimensions,
            'weight' => $this->weight,
            'short_desc' => $this->short_desc,
            'desc' => $this->desc,
            'regular_price' => $this->regular_price,
            'sale_price' => $this->sale_price,
            'featured' => $this->featured,
            'quantity' => $this->quantity,
            'image' => $this->image,
            'catigory_id' => $this->catigory_id,
            'color_id' => $this->color_id,
            'brand_id' => $this->brand_id,
        ];
    }
}
