<?php

namespace Esign\EnvironmentBadge;

use Esign\EnvironmentBadge\View\Components\EnvironmentBadge;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class EnvironmentBadgeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom($this->viewPath(), 'environment-badge');
        $this->loadTranslationsFrom($this->langPath(), 'environment-badge');
        Blade::component('environment-badge', EnvironmentBadge::class);

        if ($this->app->runningInConsole()) {
            $this->publishes([$this->configPath() => config_path('environment-badge.php')], 'config');
            $this->publishes([$this->langPath() => $this->app->langPath('vendor/environment-badge')], 'lang');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'environment-badge');
    }

    protected function configPath(): string
    {
        return __DIR__ . '/../config/environment-badge.php';
    }

    protected function viewPath(): string
    {
        return __DIR__ . '/../resources/views';
    }

    protected function langPath(): string
    {
        return __DIR__ . '/../resources/lang';
    }
}
