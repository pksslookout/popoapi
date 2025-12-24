<?php

namespace Modules\Core\Entities;

use Modules\Core\Entities\BaseEntity as Model;
use ThrowException;

class AppVersion extends Model
{
    protected $guarded = [];
    protected $table = 'app_versions';

    static public $resourceName = 'App版本';
}
