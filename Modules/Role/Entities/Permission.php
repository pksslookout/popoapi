<?php
namespace Modules\Role\Entities;

use Modules\Core\Entities\BaseEntity as Model;

class Permission extends Model
{
	protected $guarded = [];
    static public $resourcename = '权限';

    public function roles()
    {
        return $this->belongsToMany('Modules\Modules\Entities\Role', 'permission_role')->withTimestamps();
    }
}
