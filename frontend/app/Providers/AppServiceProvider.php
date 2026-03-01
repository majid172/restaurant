<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\NavigationItem;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.navbar', function ($view) {
            if (Schema::hasTable('navigation_items')) {
                $navItems = NavigationItem::with('children')->whereNull('parent_id')
                    ->where('is_active', true)
                    ->orderBy('position')
                    ->get();
                
                $desktopItems = $navItems->where('show_on_desktop', true)->values();
                $mobileItems = $navItems->where('show_on_mobile', true)->values();

                // Split desktop items in half for left and right areas around logo
                $mid = ceil($desktopItems->count() / 2);
                $leftNavItems = $desktopItems->take($mid);
                $rightNavItems = $desktopItems->skip($mid)->values();

                $view->with(compact('leftNavItems', 'rightNavItems', 'mobileItems'));
            } else {
                $view->with('leftNavItems', collect([]))
                     ->with('rightNavItems', collect([]))
                     ->with('mobileItems', collect([]));
            }
        });
    }
}
