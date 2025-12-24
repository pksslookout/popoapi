<?php
namespace Modules\Core\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Setting;
use Validator;
use ThrowException;
use DB;

class SysSettingController extends Controller
{
    public function store(Request $req, $type)
    {
        $rule = [
            'setting' => ['required', 'array']
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $setting = $req->input('setting');

        Setting::set('sys_' . $type, $setting);

        return [];
    }

    public function show(Request $req, $type)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $setting = Setting::get('sys_' . $type);

        return [
            'setting' => $setting
        ];
    }
}
