<?php

namespace AndreiIonita\BladeRemixIcon\Tests;

use AndreiIonita\BladeRemixIcon\BladeRemixIconServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            BladeIconsServiceProvider::class,
            BladeRemixIconServiceProvider::class,
        ];
    }
}
