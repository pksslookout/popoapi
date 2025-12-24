<?php

namespace Modules\Core\Facades;

use Illuminate\Support\Facades\Facade;

class Miniapp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Miniapp';
    }
}
