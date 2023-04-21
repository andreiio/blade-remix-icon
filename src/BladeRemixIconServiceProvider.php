<?php

declare(strict_types=1);

namespace AndreiIonita\BladeRemixIcon;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class BladeRemixIconServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('remix', [
                'path' => __DIR__.'/../resources/svg',
                'prefix' => 'ri',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-remix-icon'),
            ], 'blade-remix-icon');
        }
    }
}
