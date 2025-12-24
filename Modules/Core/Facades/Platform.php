<?php

namespace Modules\Core\Facades;

use Illuminate\Support\Facades\Facade;

class Platform extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Platform';
    }
}
