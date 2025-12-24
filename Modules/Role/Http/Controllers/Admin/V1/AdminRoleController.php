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

        $list = Role::getList([
            'scopes' => [
                'type' => 'admin'
            ],
            'with_count' => [
                'members'
            ],
            'only' => [
                'id',
                'uuid',
                'name',
                'members_count',
                'description',
                'code',
                'perm_codes'
            ]
        ]);

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

    public function update(Request $req, $uuid)
    {
        $rule = [
            'perms' => ['array']
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $item = Role::getEntity([
            'uuid' => $uuid
        ]);

        if ($req->type === 'update') {
            $info = $req->input('attributes');
            unset($info['perms']);
            $item->update($info);
            $item->syncPermissions($req->input('attributes.perms'));
        }

        return [];
    }


    public function destroy(Request $req, $uuid)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $item = Role::getEntity([
            'uuid' => $uuid
        ]);

        $item->delete();

        return [];
    }
}
