<?php

namespace App\Livewire;

use App\Models\BusinessHour;
use Livewire\Component;

class AboutPage extends Component
{
    public function render()
    {
        $businessHours = BusinessHour::orderBy('day_of_week')->get();

        return view('livewire.about-page', [
            'businessHours' => $businessHours,
        ])->layout('components.layouts.app', ['title' => 'About Us']);
    }
}
