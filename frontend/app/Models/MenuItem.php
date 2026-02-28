<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MenuItem extends Model
{
    use SoftDeletes;

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'dietary_labels' => 'array',
        'metadata' => 'array',
        'availability_settings' => 'array',
        'is_active' => 'boolean',
        'is_popular' => 'boolean',
        'is_new' => 'boolean',
        'base_price_cents' => 'integer',
        'spiciness_level' => 'integer',
        'prep_time_minutes' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ItemImage::class)->orderBy('position');
    }

    public function primaryImage()
    {
        return $this->hasOne(ItemImage::class)->where('is_primary', true);
    }

    public function getLocalizedName(?string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->name[$locale] ?? $this->name['en'] ?? '—';
    }

    public function getLocalizedDescription(?string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->description[$locale] ?? $this->description['en'] ?? '';
    }

    public function getFormattedPrice(): string
    {
        return number_format($this->base_price_cents / 100, 2);
    }
}
