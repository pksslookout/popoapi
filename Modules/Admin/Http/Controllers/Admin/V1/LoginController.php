<?php
namespace Modules\Admin\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Hash;
use Modules\Admin\Entities\Admin;
use Modules\User\Entities\User;

use Validator;
use ThrowException;
use Auth;
use Cache;
use Miniapp;

class LoginController extends Controller
{
    // 密码登陆
    public function loginWithPassword(Request $req)
    {
        $rule = [
            'phone' => ['required'],
            'password' => ['required'],
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $data['phone'] = $req->phone;
        $data['password'] = $req->password;

        // 校验验证码是否正确

        $admin = Admin::getEntity([
            'phone' => $data['phone']
        ]);

        if(!$admin){
            ThrowException::Conflict('账号错误');
        }

        if (!Hash::check($data['password'], $admin->password)) {
            ThrowException::Conflict('密码错误');
        }

        if (!$admin->is_password_login_enabled) {
            ThrowException::Conflict('此帐号已禁用密码登陆~');
        }

        $token = Auth::generateToken($admin, [
            'ip' => $req->getClientIp()
            // 'platform' => 'pc_web'
        ]);

        $info = getIpLocation($req->getClientIp());
        \Log::error('登陆地区: ' . implode('-', $info));

        return [
            'token' => $token
        ];
    }

    // 获取二维码
    public function loginQrcode(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();


        $uuid = str_random(50);
        $path = '/package/my/auth/index?uuid=' . $uuid;

        $ip = $req->getClientIp();
        $action = '登陆PC端管理后台';

        $cached = [
            'ip' => $ip,
            'action' => $action
        ];
        Cache::put($uuid, $cached, 120);

        // 小程序码
        $qrcode = @Miniapp::get('default')->getMiniappCode($path);

        return [
            'info' => $qrcode,
            'uuid' => $uuid
        ];
    }

    // 获取
    public function qrcodeCheck(Request $req)
    {
        $rule = [
            'uuid' => ['required']
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $ip = $req->getClientIp();
        $uuid = $req->uuid;

        $cached = Cache::get($uuid);

        if (!$cached || (@$cached['ip'] !== $ip)) {
            ThrowException::Conflict('二维码已失效，请重新获取~');
        }

        if (!@$cached['user_id']) {
            return [];
        }

        $user = User::where('id', $cached['user_id'])->first();

        if (!$user->phone) {
            ThrowException::Conflict('扫码用户手机号未添加为管理员~');
        }

        $admin = Admin::where('phone', $user->phone)->first();

        if (!$admin) {
            ThrowException::Conflict('扫码用户手机号未添加为管理员~');
        }

        $token = Auth::generateToken($admin, [
            'ip' => $req->getClientIp()
            // 'platform' => 'pc_web'
        ]);

        $info = getIpLocation($req->getClientIp());
        \Log::error('登陆地区: ' . implode('-', $info));

        return [
            'token' => $token
        ];
    }
}
