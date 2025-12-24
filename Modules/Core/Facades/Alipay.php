<?php

namespace Modules\Core\Facades;

use Illuminate\Support\Facades\Facade;

class Alipay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Alipay';
    }
}
