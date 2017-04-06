<?php

namespace Vikin\Laricon\Facades;

use Illuminate\Support\Facades\Facade;

class Laricon extends Facade
{
    /**
     * Get the binding in the IoC container.
     *
     * @return string
     */
    protected static function getFacadeAccessor ()
    {
        return 'laricon';
    }
}