<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StaffResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Firstname' => $this->firstname,
            'Lastname' => $this->lastname,
            'Staff_ID' => $this->staff_id,
            'Address' => $this->address,
            'Class' => $this->class,
            'Signature' => \env('APP_URL').'/public/'.$this->signature,
            'Passport' => \env('APP_URL').'/public/'.$this->image,
            'phone' => $this->phone,
            'Year' => $this->created_at->format('Y'),
        ];
    }
}