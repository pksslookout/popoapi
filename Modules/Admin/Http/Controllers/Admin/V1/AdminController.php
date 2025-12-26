<?php
namespace Modules\Admin\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Hash;
use Modules\Admin\Entities\Admin;

use Validator;
use ThrowException;
use Auth;

class AdminController extends Controller
{
    public function index(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $options = $req->all();

        $options['where']['is_hidden'] = 0;

        $options['only'] = [
            'id',
            'uuid',
            'name',
            'phone',
            'is_password_login_enabled',
            'roles' => [
                '*' => [
                    'id',
                    'uuid',
                    'name',
                ]
            ],
            'last_active_at',
            'created_at'
        ];

        $options['with'] = ['roles'];

        $list = Admin::getList($options);

        return $list->generateListResponse();
    }

    public function store(Request $req)
    {
        $rule = [
            'roles' => ['array']
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $admin = Admin::isExisting([
            'phone' => $req->phone,
        ]);

        if($admin){
            ThrowException::Conflict('手机号已被使用');
        }

//        $info = $req->all();

        $info = [
            'name' => $req->name,
            'phone' => $req->phone,
            'password' => Hash::make($req->password),
        ];

        $item = Admin::create($info);

        $item->syncRoles($req->roles);

        return [
            'id' => $item->id,
            'uuid' => $item->uuid
        ];
    }

    public function update(Request $req, $id)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $item = Admin::getEntity([
            'id' => $id
        ]);

        if ($req->type === 'update') {
            $info = $req->input('attributes');
            unset($info['roles']);
            $item->update($info);
            $item->syncRoles($req->input('attributes.roles'));
        }
        elseif ($req->type === 'update_is_password_login_enabled') {
            $item->update([
                'is_password_login_enabled' => $req->is_password_login_enabled
            ]);
        }
        elseif ($req->type === 'reset_password') {
            if (!$req->input('password') || strlen($req->password) < 6) {
                ThrowException::Conflict('管理员密码需要6位长度以上');
            }
            $item->update([
                'password' => Hash::make($req->password)
            ]);
        }

        return [];
    }

    public function destroy(Request $req, $id)
    {
        if($id==1){
            ThrowException::Conflict('当前超级管理员无法被删除');
        }
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $item = Admin::getEntity([
            'id' => $id
        ]);

        $item->delete();

        return [];
    }
}
