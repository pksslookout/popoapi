<?php

namespace Modules\Core\Facades;

use Illuminate\Support\Facades\Facade;

class LogService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'LogService';
    }
}
