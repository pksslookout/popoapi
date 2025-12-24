<?php

namespace Modules\Core\Facades;

use Illuminate\Support\Facades\Facade;

class InnerMessage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'InnerMessage';
    }
}
