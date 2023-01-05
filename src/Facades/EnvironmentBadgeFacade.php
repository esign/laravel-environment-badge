<?php

namespace Esign\EnvironmentBadge\Facades;

use Illuminate\Support\Facades\Facade;

class EnvironmentBadgeFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'environment-badge';
    }
}
