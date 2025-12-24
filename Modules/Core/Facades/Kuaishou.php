<?php

namespace Modules\Core\Facades;

use Illuminate\Support\Facades\Facade;

class Kuaishou extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Kuaishou';
    }
}
