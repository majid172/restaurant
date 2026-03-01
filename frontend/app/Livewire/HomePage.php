<?php

namespace App\Livewire;

use App\Models\HeroSlide;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        $heroSlides = HeroSlide::where('is_active', true)->orderBy('position')->get();

        return view('livewire.home-page', [
            'heroSlides' => $heroSlides,
        ])->layout('components.layouts.app', ['title' => 'Home']);
    }
}
