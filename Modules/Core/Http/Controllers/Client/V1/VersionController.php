<?php
namespace Modules\Core\Http\Controllers\Client\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Core\Entities\AppVersion;
use Auth;

class VersionController extends Controller
{
    public function appVersionCheckUpdate(Request $req) 
    {
        $osType = Auth::osType();

    	$newVersion = AppVersion::orderBy('id', 'desc')->where('os_type', $osType)->where('status', 1)->first();

        if (!$req->input('version')) {
            ThrowException::Conflict('缺少版本号');
        }

        // 简单判断版本也后台最新版本是否一致
        if (!$newVersion || $req->version === $newVersion->version) {
            $res = [
                'is_has_update' => 0
            ];
        }
        else  {
            $info = $newVersion->getInfo();

            $info['desc'] = explode("\n", $newVersion->desc ?: '');

        	$res = [
                'is_has_update' => 1,
        		'new_version' => $info
        	];
        }

    	return $res;
    }
}
