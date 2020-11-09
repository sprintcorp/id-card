<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResources extends JsonResource
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
            'Secondname' => $this->secondname,
            'Admission_no' => $this->admission_no,
            'Parent_no' => $this->parent_no,
            'Class' => $this->class,
            'Address' => $this->adddress,
            'Signature' => \env('APP_URL').'/'.$this->signature,
            'Passport' => \env('APP_URL').'/'.$this->image,
            'Surname' => $this->surname,
            'Year' => $this->created_at->format('Y'),
        ];
    }
}