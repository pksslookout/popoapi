<?php

namespace Modules\Core\Facades;

use Illuminate\Support\Facades\Facade;

class ThrowException extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ThrowExceptionService';
    }
}
