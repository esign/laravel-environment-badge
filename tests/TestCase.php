<?php

namespace Esign\EnvironmentBadge\Tests;

use Esign\EnvironmentBadge\EnvironmentBadgeServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [EnvironmentBadgeServiceProvider::class];
    }
} 