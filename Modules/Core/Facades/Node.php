<?php

namespace Modules\Core\Facades;

use Illuminate\Support\Facades\Facade;

class Node extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Node';
    }
}
