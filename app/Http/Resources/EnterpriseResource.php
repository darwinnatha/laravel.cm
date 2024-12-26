<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Enterprise;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Enterprise
 */
final class EnterpriseResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'website' => $this->website,
            'description' => $this->description,
            'about' => $this->about,
            'foundedIn' => $this->founded_in,
            'ceo' => $this->ceo,
            'isCertified' => $this->is_certified,
            'isFeatured' => $this->is_featured,
            'isPublic' => $this->is_public,
            'size' => $this->size,
            'settings' => $this->settings,
            'images' => [
                'logo' => $this->getFirstMediaUrl('logo', 'logo_thumb'),
                'cover' => $this->getFirstMediaUrl('cover', 'cover_thumb'),
            ],
            'owner' => UserResource::make($this->owner),
            'createdAt' => DateTimeResource::make($this->created_at),
            'updatedAt' => DateTimeResource::make($this->updated_at),
        ];
    }
}
