<?php

namespace Modules\Core\Middleware;

use Modules\Core\Middleware\TransformsRequest as Middleware;

class RemoveEmptyParams extends Middleware
{
    protected function transform($key, $value)
    {
        return $value === '' ? NULL : $value;
    }
}
