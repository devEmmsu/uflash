<?php

namespace Hugueso\Uflash;

use Illuminate\Support\Facades\Facade;

class Uflash extends Facade
{
    /**
     * Get the binding in the  container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'uflash';
    }
}