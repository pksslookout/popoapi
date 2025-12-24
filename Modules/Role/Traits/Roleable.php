<?php 
namespace Modules\Role\Traits;

use Modules\Role\Entities\Permission;

use InvalidArgumentException;

trait Roleable
{
    public function roles()
    {
        $type = str_singular($this->table);
        return $this->belongsToMany('Modules\Role\Entities\Role', 'role_relations', 'target_id', 'role_id')->wherePivot('type', $type)->withTimestamps();
    }

    public function cachedRoles()
    {
        return $this->roles()->with('perms')->get();
    }

    public function can($permCode, $requireAll = false)
    {
        foreach ($this->cachedRoles() as $role) {
            if ($role->can($permCode))
                return true;
        }

        return false;
    }

    public function attachRole($role)
    {
        $type = str_singular($this->table);

        $role = is_object($role) ? $role->id : $role;

        $this->roles()->syncWithoutDetaching([
            $role => [
                'type' => $type
            ]
        ]);
    }

    public function attachRoles($roles)
    {
        foreach ($roles as $role) {
            $this->attachRole($role);
        }
    }

    public function syncRoles($roles)
    {
        $type = str_singular($this->table);

        $res = [];
        foreach ($roles as $role) {
            $role = is_object($role) ? $role->id : $role;
            $res[$role] = [
                'type' => $type
            ];
        }

        $this->roles()->sync($res);
    }

    public function permissionCodes()
    {
        $codes = [];
        foreach ($this->cachedRoles() as $role) {
            foreach ($role->cachedPerms() as $perm) {
                if (!in_array($perm->code, $codes))
                    array_push($codes, $perm->code);
            }
        }

        return $codes;
    }
}
