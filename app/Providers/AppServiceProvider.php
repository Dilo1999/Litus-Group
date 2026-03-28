<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Filament\Pages\Auth\Login as FilamentLoginPage;
use Filament\Widgets\AccountWidget as FilamentAccountWidget;
use Filament\Widgets\FilamentInfoWidget as FilamentInfoWidget;

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
        Livewire::component('filament.pages.auth.login', FilamentLoginPage::class);
        Livewire::component('filament.widgets.account-widget', FilamentAccountWidget::class);
        Livewire::component('filament.widgets.filament-info-widget', FilamentInfoWidget::class);
    }
}
