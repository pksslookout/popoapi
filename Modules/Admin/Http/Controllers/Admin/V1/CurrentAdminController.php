<?php
namespace Modules\Admin\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Admin\Entities\Admin;

use Validator;
use ThrowException;
use Auth;

class CurrentAdminController extends Controller
{
    public function info(Request $req)
    {
        $admin = Auth::requireLoginAdmin();

        $info = $admin->getInfo([
            'id',
            'uuid',
            'headimg',
            'name',
            'phone',
        ]);

        $info['perms'] = $admin->permissionCodes();

        return [
            'info' => $info
        ];
    }
}
