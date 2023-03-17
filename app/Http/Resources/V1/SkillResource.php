<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request); // its return all table column

        return [
            'id' => $this->id,
            // 'name' => $this->name,
            // OR
            'skillName' => $this->name,
            // 'slug' => route('skills.show', $this->slug)
            // OR
            'url' => route('skills.show', $this->slug)
        ];
    }
}
