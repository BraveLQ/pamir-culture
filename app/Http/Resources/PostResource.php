<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'categoty' => new CategoryResource($this->whenLoaded('category')),
            'title' => $this->title,
            'image' => asset('/storage/' . $this->image),
            'video_url' => $this->video_url,
            'description' => $this->description,
            'post_url' => $this->post_url,
            'author' => $this->author,
            'source' => $this->source

        ];
    }
}
