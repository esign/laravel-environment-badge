<?php

namespace Esign\EnvironmentBadge;

use Illuminate\Support\ServiceProvider;

class EnvironmentBadgeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([$this->configPath() => config_path('environment-badge.php')], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'environment-badge');

        $this->app->singleton('environment-badge', function () {
            return new EnvironmentBadge;
        });
    }

    protected function configPath(): string
    {
        return __DIR__ . '/../config/environment-badge.php';
    }
}
