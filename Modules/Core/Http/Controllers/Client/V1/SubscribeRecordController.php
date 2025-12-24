<?php
namespace Modules\Core\Http\Controllers\Client\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use \Modules\Core\Entities\SubscribeRecord;

use Validator;
use ThrowException;
use Auth;

class SubscribeRecordController extends Controller
{
    // 获取小程序码
    public function store(Request $req)
    {
        $rule = [
            'message_type' => ['required'],
            'app_type' => ['required']
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $user = Auth::requireLoginUser();

        $item = SubscribeRecord::create([
            'user_id' => $user->id,
            'message_type' => $req->message_type,
            'app_type' => $req->app_type,
            'target_uuid' => $req->input('target_uuid')
        ]);

        return [
            'id' => $item->id
        ];
    }
}
