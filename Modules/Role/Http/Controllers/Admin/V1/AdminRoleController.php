<?php
namespace Modules\Role\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Role\Entities\Role;

use Validator;
use ThrowException;
use Auth;

class AdminRoleController extends Controller
{
    public function index(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $options = $req->all();
        $options['scopes'] = [
            'type' => 'admin'
        ];
        $options['with_count'] = [
            'members'
        ];
        $options['only'] = [
            'id',
            'uuid',
            'name',
            'members_count',
            'description',
            'code',
            'perm_codes'
        ];

        $list = Role::getList($options);
        return $list->generateListResponse();
    }

    public function store(Request $req)
    {
        $rule = [
            'perms' => ['array']
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $info = $req->all();

        $info = [
            'name' => $req->input('name'),
            'description' => $req->input('description'),
            'type' => 'admin'
        ];

        $item = Role::create($info);

        $item->syncPermissions($req->input('perms'));

        return [
            'id' => $item->id,
            'uuid' => $item->uuid
        ];
    }

    public function update(Request $req, $id)
    {
        $rule = [
            'perms' => ['array']
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $item = Role::getEntity([
            'id' => $id
        ]);

        if ($req->type === 'update') {
            $info = $req->input('attributes');
            unset($info['perms']);
            $item->update($info);
            $item->syncPermissions($req->input('attributes.perms'));
        }

        return [];
    }


    public function destroy(Request $req, $id)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $item = Role::getEntity([
            'id' => $id
        ]);

        $item->delete();

        return [];
    }
}
