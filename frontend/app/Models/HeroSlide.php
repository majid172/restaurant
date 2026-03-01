<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSlide extends Model
{
    protected $casts = [
        'title' => 'array',
        'subtitle' => 'array',
        'button_text' => 'array',
        'is_active' => 'boolean',
        'position' => 'integer',
    ];

    public function getLocalized(string $field, ?string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        $data = $this->$field ?? [];
        return $data[$locale] ?? $data['en'] ?? '';
    }

    public function getFrontendImageUrlAttribute(): string
    {
        if (empty($this->image_path)) {
            return '';
        }
        
        $backendUrl = env('BACKEND_URL', 'http://localhost:8000');
        return rtrim($backendUrl, '/') . '/storage/' . ltrim($this->image_path, '/');
    }
}
