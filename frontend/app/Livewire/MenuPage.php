<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\MenuItem;
use Livewire\Component;

class MenuPage extends Component
{
    public ?int $activeCategory = null;
    public string $search = '';

    public function setCategory(?int $categoryId)
    {
        $this->activeCategory = $categoryId === $this->activeCategory ? null : $categoryId;
    }

    public function updatedSearch()
    {
        // Triggers re-render automatically
    }

    public function render()
    {
        $locale = app()->getLocale();

        $categories = Category::query()
            ->where('is_active', true)
            ->whereNull('parent_id')
            ->orderBy('position')
            ->withCount(['menuItems' => fn($q) => $q->where('is_active', true)])
            ->get();

        $itemsQuery = MenuItem::query()
            ->where('is_active', true)
            ->with(['category', 'primaryImage']);

        if ($this->activeCategory) {
            $itemsQuery->where('category_id', $this->activeCategory);
        }

        if ($this->search) {
            $itemsQuery->where(function ($q) {
                $q->whereRaw("JSON_EXTRACT(name, '$.en') LIKE ?", ['%' . $this->search . '%'])
                  ->orWhereRaw("JSON_EXTRACT(description, '$.en') LIKE ?", ['%' . $this->search . '%']);
            });
        }

        $menuItems = $itemsQuery->orderBy('category_id')->orderBy('is_popular', 'desc')->get();

        // Group items by category
        $groupedItems = $menuItems->groupBy('category_id');

        return view('livewire.menu-page', [
            'categories' => $categories,
            'groupedItems' => $groupedItems,
            'menuItems' => $menuItems,
            'locale' => $locale,
        ])->layout('components.layouts.app', ['title' => 'Our Menu']);
    }
}
