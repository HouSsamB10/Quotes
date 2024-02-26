<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ThemeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'font_en' => $this->font_en,
            'image' => $this->image,
            'is_free' => $this->is_free,
            'category_id' => $this->category_id,
            'created_by' => $this->created_by,
        ];
    }
}
