<?php

namespace Modules\Core\Entities;

use Modules\Core\Entities\BaseEntity as Model;
use ThrowException;

class Device extends Model
{
    protected $guarded = [];
    protected $table = 'devices';

    static public $resourceName = '用户端设备';
}
