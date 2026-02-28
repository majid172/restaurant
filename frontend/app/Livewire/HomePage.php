<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\MenuItem;
use App\Models\HeroSlide;
use App\Models\BusinessHour;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        $locale = app()->getLocale();

        $heroSlides = HeroSlide::where('is_active', true)
            ->orderBy('position')
            ->get();

        $popularItems = MenuItem::query()
            ->where('is_active', true)
            ->where('is_popular', true)
            ->with(['category', 'primaryImage'])
            ->limit(8)
            ->get();

        if ($popularItems->count() < 4) {
            $newItems = MenuItem::query()
                ->where('is_active', true)
                ->where('is_new', true)
                ->with(['category', 'primaryImage'])
                ->whereNotIn('id', $popularItems->pluck('id'))
                ->limit(8 - $popularItems->count())
                ->get();
            $popularItems = $popularItems->merge($newItems);
        }

        $categories = Category::query()
            ->where('is_active', true)
            ->whereNull('parent_id')
            ->orderBy('position')
            ->limit(6)
            ->get();

        $businessHours = BusinessHour::orderBy('day_of_week')->get();

        return view('livewire.home-page', [
            'heroSlides' => $heroSlides,
            'popularItems' => $popularItems,
            'categories' => $categories,
            'businessHours' => $businessHours,
            'locale' => $locale,
        ])->layout('components.layouts.app', ['title' => 'Home']);
    }
}
