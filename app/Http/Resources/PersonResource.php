<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return parent::toArray($request);
        // // You can Customize the return data and map a value for any key you want
        // return [
        //     'first_name' => $this->first_name,
        //     'customLastNameKey' => $this->last_name

        // ];
    }
}
