<?php

namespace App\Http\Resources\Menu;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Menu\SubMenuResource;


class MenuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'icon' => $this->icon,
            'pageName' => $this->pagename,
            'title' => $this->title,
            'ignore' => $this->ignore,
            'active' => $this->active,
            'ordering' => $this->ordering,
            'subMenu' => SubMenuResource::collection($this->subMenu),
        ];
    }
}
