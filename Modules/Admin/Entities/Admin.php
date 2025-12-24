<?php

namespace Modules\Admin\Entities;

use Modules\Core\Entities\BaseEntity as Model;

use ThrowException;
use DB;
use Modules\Role\Traits\Roleable;

class Admin extends Model
{
    use Roleable;

    protected $guarded = [];
    protected $hidden = ['password'];
    protected $table = 'admins';

    static public $resourceName = '管理员';

    public function updateActiveAt($time = null)
    {
        $time = $time ?: date('Y-m-d H:i:s');
        $this->last_active_at = $time;
        $this->save();
    }
}
