<?php

namespace Modules\Core\Facades;

use Illuminate\Support\Facades\Facade;

class SMS extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ShortMessageService';
    }
}
