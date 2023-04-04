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
                'prefix' => 'ri',
                'paths' => [
                    __DIR__.'/../resources/svg/Arrows',
                    __DIR__.'/../resources/svg/Buildings',
                    __DIR__.'/../resources/svg/Business',
                    __DIR__.'/../resources/svg/Communication',
                    __DIR__.'/../resources/svg/Design',
                    __DIR__.'/../resources/svg/Development',
                    __DIR__.'/../resources/svg/Device',
                    __DIR__.'/../resources/svg/Document',
                    __DIR__.'/../resources/svg/Editor',
                    __DIR__.'/../resources/svg/Finance',
                    __DIR__.'/../resources/svg/Health & Medical',
                    __DIR__.'/../resources/svg/Logos',
                    __DIR__.'/../resources/svg/Map',
                    __DIR__.'/../resources/svg/Media',
                    __DIR__.'/../resources/svg/Others',
                    __DIR__.'/../resources/svg/System',
                    __DIR__.'/../resources/svg/User & Faces',
                    __DIR__.'/../resources/svg/Weather',
                ],
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
