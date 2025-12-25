<?php
namespace Modules\Role\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Role\Entities\Permission;

use Validator;
use ThrowException;
use Auth;

class AdminPermissionsController extends Controller
{
    public function index(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $list = Permission::where('type', 'admin')->where('parent_id', 0)->select(['id','code','name'])->orderBy('id', 'asc')->get();
        foreach ($list as $k => $item) {
            $list[$k]['children'] = Permission::where('parent_id', $item['id'])->select(['id','code','name'])->orderBy('id', 'asc')->get();
        }


        return [
            'info' => $list
        ];
    }
}
