<?php

use App\Livewire\Front\ContactComponent;
use App\Livewire\Front\HomePageComponent;
use App\Livewire\Front\MenuNavigationComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/home',HomePageComponent::class)->name('home');
Route::get('/change-default-lang/{id}',[App\Http\Controllers\Admin\DashboardController::class,'changeDefaultLang'])->name('change-default-lang');
Route::get('/change-default-currency/{id}',[App\Http\Controllers\Admin\DashboardController::class,'changeDefaultCurrency'])->name('change-default-currency');
Route::get('/menu/item/{slug}',MenuNavigationComponent::class)->name('menu.item');
Route::get('/contact',ContactComponent::class)->name('contact');