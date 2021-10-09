<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
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
           'phone' => $this->phone,
           'email' => $this->email,
           'address' => $this->address,
           'role' => $this->role_id,
        ];
    }
}
