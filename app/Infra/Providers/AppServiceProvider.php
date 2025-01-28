<?php

namespace App\Infra\Providers;

use App\Domain\Rules\Redirect\LogoutRedirectRule;
use Filament\Facades\Filament;
use Filament\FilamentManager;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse as LogoutResponseContract;

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
        App::setLocale("pt-br");

        $this->app->bind(LogoutResponseContract::class, LogoutRedirectRule::class);
    }
}
