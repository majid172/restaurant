<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\HomePage::class)->name('home');
Route::get('/menu', App\Livewire\MenuPage::class)->name('menu');
Route::get('/about', App\Livewire\AboutPage::class)->name('about');
Route::get('/contact', App\Livewire\ContactPage::class)->name('contact');
