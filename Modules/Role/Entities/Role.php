<?php

namespace Modules\Role\Entities;

use Modules\Core\Entities\BaseEntity as Model;

use Modules\Role\Entities\Permission;

class Role extends Model
{
	protected $guarded = [];
    static public $resourceName = '角色';

    protected $appends = ['perm_codes'];

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function members()
    {
        return $this->belongsToMany('Modules\Admin\Entities\Admin', 'role_relations', 'role_id', 'target_id')->wherePivot('type', 'admin')->withTimestamps();
    }

    public function perms()
    {
    	return $this->belongsToMany('Modules\Role\Entities\Permission', 'permission_role')->withTimestamps();
    }

    public function getPermCodesAttribute()
    {
        $res = [];
        foreach ($this->cachedPerms() as $perm) {
            array_push($res, $perm->code);
        }

        return $res;
    }

    public function cachedPerms()
    {
    	return $this->perms;
    }

    // permission code
    public function can($permCode, $requiredAll = false)
    {
    	if (is_array($permCode)) {
    		// array
    	}

    	foreach ($this->cachedPerms() as $perm) {
    		if ($permCode === $perm->code)
    			return true;
    	}

    	return false;
    }

    public function attachPermission($perm)
    {
        $this->perms()->syncWithoutDetaching([
            $perm->id
        ]);
    }

    public function syncPermissions(Array $perms)
    {
        $permIds = [];

        foreach ($perms as $permCode) {
            $perm = Permission::where('code', $permCode)->first();

            $perm = $perm ?: Permission::create([
                'code' => $permCode,
                'name' => $permCode,
                'type' => $this->type
            ]);

            array_push($permIds, $perm->id);
        }

        $this->perms()->sync($permIds);
    }

    public function detachPermission($perm = null)
    {
    	if (is_null($perm))
    		$this->perms()->sync([]);
    	else
    		$this->perms()->detach($perm->id);
    }
}
